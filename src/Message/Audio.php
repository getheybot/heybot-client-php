<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class Audio
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::AUDIO;

    private $_id;
    private $messageType;

    public string $url;
    public null|string $contentType = null;
    public int $secondsDelay = 1;
}