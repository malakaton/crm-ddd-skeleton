<?php

declare(strict_types=1);

namespace App\src\ModuleName\Infrastructure\Persistence;

use App\src\ModuleName\Domain\Model;
use App\src\ModuleName\Domain\ModelRepository;
use App\src\ModuleName\Domain\ValueObjectAttribute;
use App\src\ModuleName\Infrastructure\Eloquent\ModelNameEloquentModel;

final class EloquentModelRepository implements ModelRepository
{
    /**
     * @param Model $model
     */
    public function save(Model $model): void
    {
        $modelEloquent = new ModelNameEloquentModel();
        $modelEloquent->value = $model->attribute()->value();

        $modelEloquent->save();
    }

    /**
     * @param ValueObjectAttribute $uuid
     * @return Model|null
     */
    public function search(ValueObjectAttribute $uuid): ?Model
    {
        $model = ModelNameEloquentModel::find($uuid->value());

        if ($model === null) {
            return null;
        }

        return new Model(new ValueObjectAttribute($model->value));
    }
}