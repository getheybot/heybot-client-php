<?php

namespace Heybot\Client\Lead;

use Heybot\Client\Enums\LeadTypeOption;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Cancel
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = LeadTypeOption::CANCEL;

    public string $leadId;
}