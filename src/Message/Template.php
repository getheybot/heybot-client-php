<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Template
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::TEMPLATE;

    private $_id;
    private $messageType;

    public string $phoneNumber;
    public array $params = [];
    public array $buttons = [];
    public int $secondsDelay = 1;
}