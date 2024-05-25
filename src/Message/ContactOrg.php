<?php

namespace Heybot\Client\Message;

use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class ContactOrg
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $company;
}