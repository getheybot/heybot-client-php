<?php

namespace Heybot\Client;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Chat
{
    /**
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct(
        private string $apiKey = '',
        private string $apiHost = 'https://message-server.app/api/v1',
    ) {}

    /**
     * @param \Heybot\Chat\Chat $action
     * @return PromiseInterface|Response
     * @throws ConnectionException
     */
    public function request(
         \Heybot\Chat\Chat $action
    ): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'heybot-client-php/0.0.1',
        ])->post($this->apiHost, [
            'data' => $action->toArray(),
        ]);
    }

    /**
     * @param \Heybot\Chat\Chat $action
     * @return PromiseInterface|Response
     * @throws ConnectionException
     */
    public function requestAsync(
        \Heybot\Chat\Chat $action
    ): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'heybot-client-php/0.0.1',
        ])->async()->post($this->apiHost, [
            'data' => $action->toArray(),
        ]);
    }
}