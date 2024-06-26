<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class InteractiveButton
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_BUTTON;

    private $_id;
    private $messageType;

    public string|int $id;
    public string $text;
}