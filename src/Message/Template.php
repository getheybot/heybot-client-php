<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class Template
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::TEMPLATE;

    private string $_id;
    private MessageType $messageType;

    public string $phoneNumber;
    public array $params = [];
    public int $secondsDelay = 1;
}