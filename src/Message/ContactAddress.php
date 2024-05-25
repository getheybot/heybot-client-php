<?php

namespace Heybot\Client\Message;

use Heybot\Client\Traits\StaticCreateSelf;
use Heybot\Client\Traits\ToArray;

class ContactAddress
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $city;
    public string|null $country;
    public string|null $countryCode;
    public string|null $state;
    public string|null $street;
    public string|null $type;
    public string|null $zip;
}