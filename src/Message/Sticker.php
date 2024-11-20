<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Sticker
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::STICKER;

    private $_id;
    private $messageType;

    public string $url;
    public null|string $contentType = 'image/webp';
    public int $secondsDelay = 1;
}