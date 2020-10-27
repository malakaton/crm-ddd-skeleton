<?php

declare(strict_types=1);

namespace App\src\ModuleName\Application\UseCase;

use App\src\Interaction\Domain\Params;
use App\src\ModuleName\Domain\ValueObjectAttribute;

final class UseCaseCommandHandler
{
    private UseCaseBuilder $useCaseBuilder;

    public function __construct($useCaseBuilder)
    {
        $this->useCaseBuilder = $useCaseBuilder;
    }

    /**
     * @param UseCaseCommand $command
     * @return ValueObjectAttribute (id)
     * @throws ....
     */
    public function handle(UseCaseCommand $command): ?ValueObjectAttribute
    {
        $attribute = new ValueObjectAttribute($command->attribute());
        $interactionParams = new Params([$command->attribute()]);

        $this->useCaseBuilder->__invoke($attribute, $interactionParams);

        return null;
    }
}