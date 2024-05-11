<?php

namespace Heybot\Client;

use Heybot\Client\Interfaces\Strategy;

class Heybot
{
    /**
     * @var array
     */
    public array $data = [];

    /**
     * Usually, the Context accepts a strategy through the constructor, but also
     * provides a setter to change it at runtime.
     *
     * @param Strategy $strategy The Context maintains a reference to one of the Strategy
     * objects. The Context does not know the concrete class of a strategy. It
     * should work with all strategies via the Strategy interface.
     */
    public function __construct(
        private Strategy $strategy
    ) {}

    /**
     * Usually, the Context allows replacing a Strategy object at runtime.
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param $item
     * @return void
     */
    public function add($item)
    {
        $this->data[] = $item;
    }

    /**
     * @param array $items
     * @return void
     */
    public function addMany(array $items)
    {
        $this->data = array_merge($this->data, $items);
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function send()
    {
        return $this->strategy->request($this->data);
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function sendAsync()
    {
        return $this->strategy->requestAsync($this->data);
    }
}