<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class InteractiveList
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_LIST;

    private $_id;
    private $messageType;

    public string|int $id;
    public string|int|null $title;
    public string|int|null $text;
    public string|int $buttonTitle;
    public array $sections;
    public int $secondsDelay = 1;
}