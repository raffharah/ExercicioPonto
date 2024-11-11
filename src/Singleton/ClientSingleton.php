<?php

namespace Forseti\SegundoExercicio\Singleton;

use Forseti\SegundoExercicio\Enum\Url;
use GuzzleHttp\Client;

class ClientSingleton
{
    use Singleton;
    private static function createInstance()
    {
        $config = [
            'debug' => false,
            'headers' => [
                'User-Agent' => Url::USER_AGENT,
            ],
            'cookies' => true,
            'verify' => false,
        ];
        return new Client($config);
    }
}