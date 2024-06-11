<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class InteractiveListSectionOption
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_LIST_SECTION_OPTION;

    private $_id;
    private $messageType;

    public string|int $id;
    public string|int $title;
    public string|int|null $description;
    public string $type = "text";
}