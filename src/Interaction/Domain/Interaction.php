<?php

declare(strict_types=1);

namespace App\src\Interaction\Infrastructure;

use App\src\Interaction\Domain\Params;

final class Interaction
{
    private Params $params;

    public function __construct(
        Params $params
    )
    {
        $this->params = $params;
    }

    public static function create(
        Params $params
    ): Interaction
    {
        return new self($params);
    }

    public function params(): Params
    {
        return $this->params;
    }
}