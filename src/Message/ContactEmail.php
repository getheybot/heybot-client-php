<?php

namespace Heybot\Client\Message;

use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class ContactEmail
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $email;
    public string|null $type;
}