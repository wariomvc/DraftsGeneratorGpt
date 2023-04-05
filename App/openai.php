<?php
require_once __DIR__ . '/../vendor/autoload.php';

class OpenAIClient
{
    private $ApiKey;
    private $client;
    private $config;
    private $logs='';
    public function __construct(array $config)
    {
        $this->config = $config;
        $this->client = OpenAI::client($config['openai']['key']);
    }

    public function getModels()
    {
        $response = $this->client->models()->list();
        return $response->toArray();

    }
    public function getModel()
    {
        $response = $this->client->models()->retrieve('davinci:ft-personal-2023-03-31-00-18-02');
        return $response;

    }

    /**
     * Crea una respuesta utilizando el API de OpenAI completions.
     *
     * @param string $mensaje El mensaje o prompt a utilizar para generar la respuesta.
     * @return mixed|null La respuesta generada o null si el proceso no se completó correctamente.
     */

    public function create_response(String $mensaje)
    {
        $response = $this->client->completions()->create([
            'model' => $this->config['openai']['model'],
            'prompt' =>  convertirHtmlToUtf8($mensaje),
            'max_tokens' => $this->config['openai']['max_tokens'],
            'temperature' => $this->config['openai']['temperature'],
            'top_p' => $this->config['openai']['top_p'],
            'frequency_penalty' => $this->config['openai']['frequency_penalty'],
            'presence_penalty' => $this->config['openai']['presence_penalty'],
            'stop' => $this->config['openai']['stop'],
        ]);


        //print_r( $response);
        if ($response['choices'][0]['finish_reason'] == null) {
            $this->logs .='Info OpenAI: Gpt terminó la respuesta por esta razón: '.$gpt_response['choices'][0]['text'];
            print_r('Info OpenAI: Gpt terminó la respuesta por esta razón: ');
            print_r($gpt_response['choices'][0]['text']);
            return null;
        }

        return $response;
    }
    public function get_logs(){
        return $this->logs;
    }
}