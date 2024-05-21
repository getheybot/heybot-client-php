<?php

namespace Heybot\Message;

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

    public string $phoneNumber;
    public array $params = [];
    public int $secondsDelay = 1;
}