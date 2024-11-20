<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class InteractiveButton
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_BUTTON;

    private $_id;
    private $messageType;

    public string|int $id;
    public string $text;
}