<?php

namespace Heybot\Message;

use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class ContactPhone
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $phone;
    public string|null $type;
}