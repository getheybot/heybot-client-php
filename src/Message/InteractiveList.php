<?php

namespace Heybot\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class InteractiveList
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_LIST;

    public string|int $id;
    public string|int|null $title;
    public string|int|null $text;
    public string|int $buttonTitle;
    public array $sections;
    public int $secondsDelay = 1;
}