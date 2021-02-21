<?php

namespace App\Controller;

use My\Proxy\Client;
use My\Proxy\Request;

class ProxyController extends AbstractController
{
    /**
     * @Inject
     * @var Client
     */
    protected $client;

    public function auth()
    {

    }

    public function login()
    {
        
    }

    public function request()
    {
        $request = unserialize($this->request->input('request'));

        $content = $this->client->send($request);

        return [
            'type' => 'response',
            'content' => $content
        ];
    }
}