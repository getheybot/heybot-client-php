<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class Reaction
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::REACTION;

    private $_id;
    private $messageType;

    public string $id;
    // - Can be normal emoji
    // - Should not be in 8-bit, 32-bit format
    // - 16-bit format emojis are also supported
    public $emoji;
    public int $secondsDelay = 1;
}