<?php
require_once __DIR__ . '/../vendor/autoload.php';
class DraftCreator
{
    private $gmailClient;
    private $service;
    private $emails;
    private $pdo;
    private $logs='';

    public function __construct(array $config)
    {
        $this->gmailClient = new Google_Client();
$this->gmailClient->setAuthConfigFile('./config/' . $config['gmail']['authPath']);

        $this->gmailClient->refreshToken($config['gmail']['refreshToken']);
        $this->service = new Google_Service_Gmail($this->gmailClient);

        $host = 'localhost';
        $dbname = $config['db']['dbname'];
        $username = $config['db']['username'];
        $password = $config['db']['password'];

        // Conexión a la base de datos utilizando PDO
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $username, $password, $options);
        } catch (\Throwable$th) {
            print("Error en la Conexión con Base de Datos, verificar que este en servicio, y las credenciales");

            exit(200);
        }

    }

    /**

     * Crea un borrador de un correo electrónico en Gmail para un destinatario específico y un contenido dado.
     * @param string $email Dirección de correo electrónico del destinatario.
     * @param string $content Contenido del correo electrónico.
     * @return void
     */

    public function createDraft(String $email, String $content)
    {
        $message = new Google_Service_Gmail_Message();
        $body = new Google_Service_Gmail_MessagePart();

        $data = new Google_Service_Gmail_MessagePartBody();
        // crea el encabezado del mensaje con la propiedad "to"

        $data->setData(base64_encode('Esto es un texto'));

        $body->setMimeType('text/plain');
        $body->setBody($data);

        $headers = "To: " . $email . "\n";
        $headers .= "Subject: " . mb_encode_mimeheader("Respuesta", 'utf-8') . "\n";
        $headers .= "\n";
        $bodyText = <<<EOF
        $content
        EOF;
        $headers .= $bodyText;

        $message->setRaw(rtrim(strtr(base64_encode($headers), '+/', '-_'), '='));
        $message->setPayload($body);

        // crea el borrador con el mensaje y el encabezado
        $draft = new Google_Service_Gmail_Draft();
        $draft->setMessage($message);

        // envía la solicitud para crear el borrador
        $userId = 'me';
        $this->service->users_drafts->create($userId, $draft);

    }

    /**
     * getInfoEmails
     * Obtiene los emails con la etiqueta UNREAD de la bandeja de entrada
     * Devuelve un Array de mensajes con los datos de:
     * from : Nombre y correo de remitente
     * Subject: Asunto del mensaje
     * body: Con el cuerpo del mensaje
     * name: Nombre asociado al correo en la BD
     * address: Email del remitente
     */
    public function getInfoEmails()
    {
        $results = $this->service->users_messages->listUsersMessages('me', ['q' => 'in:inbox']);
        $messages = $results->getMessages();
        $emails = array();
        foreach ($messages as $message) {
            $id = $message->getId();
            $message = $this->service->users_messages->get('me', $id, ['format' => 'full']);
            $headers = $message->getPayload()->getHeaders();
            $body = $message->getPayload()->getBody();
            $parts = $message->getPayload()->getParts();
            $labels = $message->getLabelIds();

            $from = '';
            $subject = '';
            $message_body = '';
            if (!in_array('UNREAD', $labels)) {
                continue;
            }

            // Obtener el remitente y el asunto
            foreach ($headers as $header) {

                if ($header->getName() == 'From') {
                    $from = $header->getValue();
                }
                if ($header->getName() == 'Subject') {
                    $subject = $header->getValue();
                }
                if ($header->getName() == 'ARC-Authentication-Results') {
                    //$address = $header->getValue();
                    $address = $this->extract_email($header->value);
                    $name = $this->get_name_by_email($address);

                }

            }
            if ($name == null) {
                $logs .= "Info DB: No se encontro coincidencia de nombre para el correo: " . $address . "\n";
                // print("Info DB: No se encontro coincidencia de nombre para el correo: ".$address."\n");
                continue;
            }

            // Obtener el cuerpo del mensaje
            if ($message->getPayload()->getMimeType() == 'text/html') {
                $message_body = base64ToUtf8($body->getData());
            } else if ($message->getPayload()->getMimeType() == 'multipart/alternative') {
                foreach ($parts as $part) {
                    if ($part->getMimeType() == 'text/html') {
                        $message_body = base64ToUtf8($part->getBody()->getData());
                    }
                }
            }

            // Agregar el mensaje al arreglo de mensajes

            $emails[] = array('id' => $id, 'from' => $from, 'subject' => $subject, 'body' => $message_body, 'address' => $address, 'name' => $name);
        }
        $this->emails = $emails;
        return $emails;
    }

    /**

     * Extrae la dirección de correo electrónico de una cadena de texto.
     * @param string $text La cadena de texto que contiene la dirección de correo electrónico.
     * @return string|null Devuelve la dirección de correo electrónico encontrada en la cadena de texto, o null si no se encuentra ninguna dirección de correo electrónico.
     */

    private function extract_email($text)
    {
        preg_match('/[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}/', $text, $matches); // Buscar el patrón de correo electrónico
        if (!empty($matches)) {
            return $matches[0]; // Devolver el primer resultado encontrado
        } else {
            return null; // Si no se encuentra ningún correo electrónico, devolver null
        }
    }

    /**
     * Devuelve el nombre asociado a una dirección de correo electrónico.
     *
     * @param string $email La dirección de correo electrónico para buscar el nombre asociado.
     * @return string|null El nombre asociado a la dirección de correo electrónico o null si no se encuentra.
     */

    private function get_name_by_email($email)
    {

        // Consulta a la base de datos utilizando PDO
        $stmt = $this->pdo->prepare('SELECT nombre FROM tickets WHERE email = :email');
        $stmt->execute(['email' => $email]);

        // Devolución del resultado de la consulta
        $result = $stmt->fetch();
        if ($result) {
            return $result['nombre'];
        } else {
            return null;
        }
    }

    /**
     * Establece el correo electrónico identificado por $idCorreo como leído
     *
     * @param string $idCorreo El ID del correo electrónico a marcar como leído
     * @return void
     */

    public function setReadMail(String $idCorreo)
    {

        $message = new Google_Service_Gmail_ModifyMessageRequest();
        $message->setRemoveLabelIds(['UNREAD']);
        $this->service->users_messages->modify('me', $idCorreo, $message);

    }
    public function get_logs(){
        return $this->logs;
    }

}