<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class InteractiveText
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_TEXT;

    private $_id;
    private $messageType;

    public string|int $id;
    public null|string|int $header;
    public string|int $text;
    public null|string|int $footer;
    public array $options;
    public int $secondsDelay = 1;
}