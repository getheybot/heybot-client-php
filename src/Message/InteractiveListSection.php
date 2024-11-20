<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class InteractiveListSection
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_LIST_SECTION;

    private $_id;
    private $messageType;

    public null|string|int $title;
    public null|string|int $description;
    public array $options;
}