<?php

namespace Heybot\Client\Lead;

use Heybot\Client\Enums\LeadTypeOption;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Patch
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = LeadTypeOption::OPEN;

    public string $leadId;
    public ?array $meta;
}