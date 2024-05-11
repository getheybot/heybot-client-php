<?php

namespace Heybot\Client;

use Illuminate\Support\Facades\Http;
use Heybot\Client\Interfaces\Strategy;

class Whatsapp implements Strategy
{
    private $phone;

    /**
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct(
        private string $apiKey = '',
        private string $apiHost = 'https://platform.heybot.me/api/v0.1/messaging',
    ) {}

    /**
     * @param $phoneNumber
     * @return $this
     */
    public function phoneNumber($phoneNumber)
    {
        $this->phone = $phoneNumber;
        return $this;
    }

    /**
     * @param array $data
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function request(array $data): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'heybot-client-php/0.0.1',
        ])->post($this->apiHost, [
            'phoneNumber' => $this->phone,
            'messages' => $data,
        ]);
    }

    /**
     * @param array $data
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function requestAsync($data): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'heybot-client-php/0.0.1',
        ])->async()->post($this->apiHost, [
            'phoneNumber' => $this->phone,
            'messages' => $data,
        ]);
    }
}
