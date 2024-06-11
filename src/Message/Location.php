<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class Location
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::LOCATION;

    private string $_id;
    private MessageType $messageType;

    public float|string $longitude;
    public float|string $latitude;
    public string $name;
    public string $address;
    public int $secondsDelay = 1;
}