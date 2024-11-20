<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Location
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::LOCATION;

    private $_id;
    private $messageType;

    public float|string $longitude;
    public float|string $latitude;
    public string $name;
    public string $address;
    public int $secondsDelay = 1;
}