<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';
class OpenAIClient{
    private $ApiKey;
    private $client;
    private $config;
    public function __construct(String $key, Array $config ) {
        $this->config = $config;
        $this->client = OpenAI::client($key);
    }

    public function getModels(){
        $response = $this->client->models()->list();
        return $response->toArray();
        
    }
    public function getModel(){
        $response = $this->client->models()->retrieve('davinci:ft-personal-2023-03-31-00-18-02');
        return $response;
        
    }

    public function create_response(String $mensaje){
        $response = $this->client->completions()->create([
    'model' => $this->config['openai']['model'],
    'prompt' => $mensaje,
    'max_tokens' => 104,
    'temperature' => 0.1,
    'top_p'=>0.21,
    'frequency_penalty'=>0.33,
    'presence_penalty'=>0.3,
    'stop'=>'Buen provecho'
]);
      return $response;  
    }
}