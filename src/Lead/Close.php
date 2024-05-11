<?php

namespace Heybot\Lead;

use Heybot\Client\Enums\LeadTypeOption;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Close
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = LeadTypeOption::CLOSE;

    public string $leadId;
}