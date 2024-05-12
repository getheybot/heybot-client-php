<?php

namespace Heybot\Client;
;

use Heybot\Client\Interfaces\Strategy;
use Illuminate\Support\Facades\Http;

class Lead implements Strategy
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
     * @param array $data
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function request(
        array $data
    ): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'heybot-client-php/0.0.1',
        ])->post($this->apiHost, [
            'data' => $data,
        ]);
    }

    /**
     * @param array $data
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function requestAsync(
        array $data
    ): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'heybot-client-php/0.0.1',
        ])->async()->post($this->apiHost, [
            'data' => $data,
        ]);
    }
}