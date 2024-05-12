<?php

namespace Heybot\Chat;

use Heybot\Client\Enums\ChatOptions;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class Chat
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    // Whatsapp: phone number value
    public string $entity;
    public ChatOptions $action;
}