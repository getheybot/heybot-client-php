<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class Document
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::DOCUMENT;

    private $_id;
    private $messageType;

    public string $url;
    public string $filename;
    public null|string $contentType = null;
    public int $secondsDelay = 1;
}