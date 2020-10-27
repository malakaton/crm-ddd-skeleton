<?php

declare(strict_types=1);

namespace BooksManagement\Book\Application\Create;

use App\src\ModuleName\Application\UseCase\UseCaseBuilder;
use App\src\ModuleName\Application\UseCase\UseCaseCommand;
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

        $this->useCaseBuilder->__invoke($attribute);

        return null;
    }
}