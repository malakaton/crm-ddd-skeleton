<?php

declare(strict_types=1);

namespace App\src\Interaction\Domain;

interface GuzzleInteractionRepository
{
    public function __invoke(Params $params): void;
}