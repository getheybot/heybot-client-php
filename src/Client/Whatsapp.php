<?php

namespace Heybot\Client;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Heybot\Client\Interfaces\Strategy;

class Whatsapp implements Strategy
{
    private string $phone;
    private string $templateId;
    private string $campaignName;
    private string $resource;

    const RESOURCE_MESSAGING = '/messaging';
    const RESOURCE_MESSAGING_CAMPAIGN = '/messaging-campaign';
    const RESOURCE_MESSAGING_TEMPLATE = '/messaging-template';

    const USER_AGENT = 'heybot-client-php/v1';

    /**
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct(
        private string $apiKey = '',
        private string $apiHost = 'https://relay.message-server.app/api/v1',
    ) { }

    /**
     * @param $phoneNumber
     * @return $this
     */
    public function phoneNumber($phoneNumber)
    {
        $this->phone = $phoneNumber;
        $this->resource = self::RESOURCE_MESSAGING;
        return $this;
    }

    /**
     * @param string $name
     * @param string $templateId
     * @return $this
     */
    public function campaign(string $name, string $templateId)
    {
        $this->campaignName = mb_substr($name, 0, 100);
        $this->templateId = $templateId;
        $this->resource = self::RESOURCE_MESSAGING_CAMPAIGN;
        return $this;
    }

    /**
     * @param string $templateId
     * @return $this
     */
    public function template(string $templateId)
    {
        $this->templateId = $templateId;
        $this->resource = self::RESOURCE_MESSAGING_TEMPLATE;
        return $this;
    }

    /**
     * @param array $data
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     * @throws ConnectionException
     */
    public function request(array $data): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $payload = match ($this->resource) {
            self::RESOURCE_MESSAGING => [
                'phoneNumber' => $this->phone,
                'messages' => $data,
            ],
            self::RESOURCE_MESSAGING_CAMPAIGN => [
                'campaignName' => $this->campaignName,
                'templateId' => $this->templateId,
                'messages' => $data,
            ],
            self::RESOURCE_MESSAGING_TEMPLATE => [
                'templateId' => $this->templateId,
                'messages' => $data,
            ],
        };

        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => self::USER_AGENT,
        ])->acceptJson()->asJson()->post($this->apiHost . $this->resource, $payload);
    }

    /**
     * @param array $data
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function requestAsync(array $data): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $payload = match ($this->resource) {
            self::RESOURCE_MESSAGING => [
                'phoneNumber' => $this->phone,
                'messages' => $data,
            ],
            self::RESOURCE_MESSAGING_CAMPAIGN => [
                'campaignName' => $this->campaignName,
                'templateId' => $this->templateId,
                'messages' => $data,
            ],
            self::RESOURCE_MESSAGING_TEMPLATE => [
                'templateId' => $this->templateId,
                'messages' => $data,
            ],
        };

        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => self::USER_AGENT,
        ])->async()->acceptJson()->asJson()->post($this->apiHost . $this->resource, $payload);
    }
}
