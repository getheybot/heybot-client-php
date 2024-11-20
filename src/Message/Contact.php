<?php

namespace Heybot\Client\Message;

use Heybot\Client\Enums\MessageType;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Contact
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = MessageType::CONTACT;

    private $_id;
    private $messageType;

    public array $name = [];
    public array $org = [];
    public array $emails = [];
    public array $phones = [];
    public array $addresses = [];
    public array $urls = [];
    public array $ims = [];
    public int $secondsDelay = 1;
}