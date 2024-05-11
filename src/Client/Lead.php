<?php

namespace Heybot\Client;

use Heybot\Lead\Cancel;
use Heybot\Lead\Close;
use Heybot\Lead\Open;
use Heybot\Lead\Solve;
use Illuminate\Support\Facades\Http;

class Lead
{
    /**
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct(
        private string $apiKey = '',
        private string $apiHost = 'https://platform.heybot.me/api/v0.1/leads',
    ) {}

    /**
     * @param array $actions
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function request(
        array $actions
    ): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'heybot-client-php/0.0.1',
        ])->post($this->apiHost, [
            'data' => $actions,
        ]);
    }

    /**
     * @param array $actions
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function requestAsync(
        array $actions
    ): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'heybot-client-php/0.0.1',
        ])->async()->post($this->apiHost, [
            'data' => $actions,
        ]);
    }
}