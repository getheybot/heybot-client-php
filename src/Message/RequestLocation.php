<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class RequestLocation
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::LOCATION_REQUEST;

    private $_id;
    private $messageType;

    public null|string|int $text;
    public int $secondsDelay = 1;

}