<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class InteractiveDocument
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_DOCUMENT;

    private $_id;
    private $messageType;

    public string|int $id;
    public string $url;
    public string|int $text;
    public string|int $filename;
    public null|string|int $footer;
    public array $options;
    public int $secondsDelay = 1;
}