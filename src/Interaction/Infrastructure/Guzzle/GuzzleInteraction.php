<?php

declare(strict_types=1);

namespace App\src\Interaction\Infrastructure\Guzzle;

use App\src\Interaction\Domain\Params;
use App\src\Shared\Infrastructure\Guzzle\GuzzleConnection;
use App\src\Interaction\Domain\GuzzleInteractionRepository;

final class GuzzleInteraction extends GuzzleConnection implements GuzzleInteractionRepository
{
    public function __invoke(Params $params): void
    {
        $this->execute($params->value());
    }
}