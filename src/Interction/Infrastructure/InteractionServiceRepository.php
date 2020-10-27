<?php

declare(strict_types=1);

namespace App\src\Interaction\Infrastructure;

use App\src\Interaction\Domain\InteractionRepository;

class InteractionServiceRepository implements InteractionRepository
{
    public function store(array $params): void
    {
        // All logical to store interaction will be here
    }
}