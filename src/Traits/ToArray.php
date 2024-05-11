<?php

declare(strict_types=1);

namespace Heybot\Client\Traits;

trait ToArray
{
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}