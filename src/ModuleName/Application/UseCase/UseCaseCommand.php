<?php

declare(strict_types=1);

namespace App\src\ModuleName\Application\UseCase;

use App\src\Shared\Domain\Command;

final class UseCaseCommand implements Command
{
    private string $attribute;

    public function __construct(string $attribute)
    {
        $this->attribute   = $attribute;
    }

    public function attribute(): string
    {
        return $this->attribute;
    }
}