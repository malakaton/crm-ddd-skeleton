<?php

declare(strict_types=1);

namespace App\src\Shared\Infrastructure\Guzzle;

use App\src\Interaction\Domain\Params;

interface GuzzleInteractionRepository
{
    public function __invoke(Params $params): void;
}