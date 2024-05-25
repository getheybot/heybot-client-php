<?php

namespace Heybot\Client\Message;

use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class ContactName
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $firstName;
    public string|null $formattedName;
    public string|null $lastName;
}