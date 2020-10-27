<?php

declare(strict_types=1);

namespace App\src\ModuleName\Application\UseCase;

use App\src\Interaction\Domain\InteractionRepository;
use App\src\ModuleName\Domain\ModelCreator as DomainModelCreator;
use App\src\ModuleName\Domain\ModelRepository;
use App\src\ModuleName\Domain\ValueObjectAttribute;

/**
 * Class UseCaseBuilder
 *
 * Example of create Offer service on crm-business
 *
 * The steps are the follows
 * 1 - Create interaction
 * 2 - Prepare scoring parameters
 * 3 - Evaluate
 *
 * @package App\src\ModuleName\Application\UseCase
 */
final class UseCaseBuilder
{
    private DomainModelCreator $creator;

    public function __construct(
        InteractionRepository $interactionCreator,
        ModelRepository $modelRepository
    ) {
        $this->creator = new DomainModelCreator($interactionCreator, $modelRepository);
    }

    public function __invoke(
        ValueObjectAttribute $attribute
    ): void
    {
        $this->creator->__invoke($attribute);
    }
}