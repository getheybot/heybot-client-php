<?php

namespace Heybot\Lead;

use Heybot\Client\Enums\LeadTypeOption;
use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class Solve
{
    use StaticCreateSelf;
    use ToArray;

    const MESSAGE_TYPE = LeadTypeOption::SOLVED;

    public string $leadId;
}