<?php

namespace Heybot\Client\Message;

use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class ContactUrl
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $url;
    public string|null $type;
}