<?php
require_once __DIR__ . '/../vendor/autoload.php';

class OpenAIClient
{
    private $ApiKey;
    private $client;
    private $config;
    private $logs = '';
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
        try {
            $gpt_response = $this->client->completions()->create([
                'model' => $this->config['openai']['model'],
                'prompt' => convertirHtmlToUtf8($mensaje),
                'max_tokens' => intval($this->config['openai']['max_tokens']),
                'temperature' => floatval($this->config['openai']['temperature']),
                'top_p' => floatval($this->config['openai']['top_p']),
                'frequency_penalty' => floatval($this->config['openai']['frequency_penalty']),
                'presence_penalty' => floatval($this->config['openai']['presence_penalty']),
                'stop' => $this->config['openai']['stop'],
            ]);

        } catch (\Throwable$th) {
            print_r('Error');
            $this->logs .= $th;
            return;
        }

        if (($gpt_response['choices'][0]['finish_reason'] != 'stop')&&($gpt_response['choices'][0]['finish_reason'] != '') ) {
        $this->logs .= 'Info OpenAI: Gpt terminó la respuesta por esta razón: ' . $gpt_response['choices'][0]['finish_reason'];
        return null;
        }

        return $gpt_response;
    }
    public function get_logs()
    {
        return $this->logs;
    }
}