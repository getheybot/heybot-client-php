<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class InteractiveListSection
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_LIST_SECTION;

    private $_id;
    private $messageType;

    public null|string|int $title;
    public null|string|int $description;
    public array $options;
}