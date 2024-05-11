<?php

namespace Heybot\Lead;

use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;
use Heybot\Client\Enums\LeadMetaTypeOption;

class Meta
{
    use StaticCreateSelf;
    use ToArray;

    public LeadMetaTypeOption $metaType;
    public string $metaKey;
    public string $metaValue;
}