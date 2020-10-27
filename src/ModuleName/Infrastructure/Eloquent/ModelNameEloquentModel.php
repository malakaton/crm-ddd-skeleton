<?php

declare(strict_types=1);

namespace App\src\ModuleName\Infrastructure\Eloquent;

use Illuminate\Database\Eloquent\Model;

final class ModelNameEloquentModel extends Model
{
    protected string $table = 'modelName';
    protected string $primaryKey = 'uuid';
    public bool $timestamps = false;
    protected array $fillable = ['value'];
}