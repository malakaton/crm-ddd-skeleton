<?php

declare(strict_types=1);

namespace App\src\ModuleName\Domain;

interface ModelRepository
{
    public function save(Model $model): void;

    public function search(ValueObjectAttribute $model): ?Model;

}