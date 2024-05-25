<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Traits\Validate;

class Contact
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::CONTACT;

    public array $name = [];
    public array $org = [];
    public array $emails = [];
    public array $phones = [];
    public array $addresses = [];
    public array $urls = [];
    public array $ims = [];
    public int $secondsDelay = 1;
}