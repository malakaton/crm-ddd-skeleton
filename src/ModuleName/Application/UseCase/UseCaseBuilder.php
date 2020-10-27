<?php

declare(strict_types=1);

namespace App\src\ModuleName\Application\UseCase;

use App\src\Interaction\Domain\Params;
use App\src\ModuleName\Domain\ModelCreator as DomainModelCreator;
use App\src\ModuleName\Domain\ModelRepository;
use App\src\ModuleName\Domain\ValueObjectAttribute;
use App\src\Shared\Infrastructure\Guzzle\GuzzleInteractionRepository;

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
        GuzzleInteractionRepository $guzzleRepository,
        ModelRepository $modelRepository
    ) {
        $this->creator = new DomainModelCreator($guzzleRepository, $modelRepository);
    }

    public function __invoke(
        ValueObjectAttribute $attribute,
        Params $interactionParams
    ): void
    {
        $this->creator->__invoke($attribute, $interactionParams);
    }
}