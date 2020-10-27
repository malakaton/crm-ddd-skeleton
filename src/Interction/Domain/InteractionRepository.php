<?php

declare(strict_types=1);

namespace App\src\Interaction\Domain;

interface InteractionRepository
{
    public function store(array $params): void;
}