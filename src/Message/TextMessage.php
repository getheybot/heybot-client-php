<?php

namespace Heybot\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class TextMessage
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::MESSAGE;

    public string|int $text;
    public bool $previewUrl = false; // If you want to add a preview URL, set true:
    public int $secondsDelay = 1;

}