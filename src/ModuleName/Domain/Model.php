<?php

declare(strict_types=1);

namespace App\src\ModuleName\Domain;

final class Model
{
    private ValueObjectAttribute $attribute;

    public function __construct(
        ValueObjectAttribute $attribute
    )
    {
        $this->attribute = $attribute;
    }

    public static function create(
        ValueObjectAttribute $attribute
    ): Model
    {
        return new self($attribute);
    }

    public function attribute(): ValueObjectAttribute
    {
        return $this->attribute;
    }
}