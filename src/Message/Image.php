<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class Image
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::IMAGE;

    private string $_id;
    private MessageType $messageType;

    public string $url;
    public null|string|int $text;
    public null|string $contentType = null;
    public int $secondsDelay = 1;
}