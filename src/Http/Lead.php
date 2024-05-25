<?php

namespace Heybot\Client\Http;


use Heybot\Client\Interfaces\Strategy;
use Illuminate\Support\Facades\Http;

class Lead implements Strategy
{
    const USER_AGENT = 'heybot-client-php/v1';

    /**
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct(
        private string $apiKey = '',
        private string $apiHost = 'https://message-server.app/api/v1',
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
            'User-Agent' => self::USER_AGENT,
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
            'User-Agent' => self::USER_AGENT,
        ])->async()->post($this->apiHost, [
            'data' => $data,
        ]);
    }
}