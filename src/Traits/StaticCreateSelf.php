<?php

declare(strict_types=1);

namespace Heybot\Client\Traits;

use Ulid\Ulid;

trait StaticCreateSelf
{
    public static function create(array $values): self
    {
        $dto = new self();

        if (isset($dto->_id)) {
            $dto->_id = (new Ulid)->generate();
        }

        if (isset($dto->messageType)) {
            $dto->messageType = self::MESSAGE_TYPE;
        }

        foreach ($values as $key => $value) {
            if (property_exists($dto, $key)) {
                $dto->$key = $value;
            }
        }

        return $dto;
    }

    public static function add(array $values): self
    {
        return self::create($values);
    }

    public static function getMessageType()
    {
        return self::MESSAGE_TYPE;
    }
}
