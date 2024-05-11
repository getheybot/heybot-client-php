<?php

namespace Heybot\Lead;

use Heybot\Client\Enums\LeadTypeOption;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Open
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = LeadTypeOption::OPEN;

    public string $phoneNumber;
    public ?array $meta;
}