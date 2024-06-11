<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class InteractiveVideo
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_VIDEO;

    private $_id;
    private $messageType;

    public string|int $id;
    public string $url;
    public string|int $text;
    public null|string|int $footer;
    public array $options;
    public int $secondsDelay = 1;
}