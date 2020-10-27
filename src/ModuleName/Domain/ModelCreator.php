<?php

declare(strict_types=1);

namespace App\src\ModuleName\Domain;

use App\src\Interaction\Domain\Params;
use App\src\Interaction\Infrastructure\Interaction;
use App\src\Shared\Infrastructure\Guzzle\GuzzleInteractionRepository;

final class ModelCreator
{
    private GuzzleInteractionRepository $guzzleInteractionRepository;
    private ModelRepository $modelRepository;

    public function __construct(
        GuzzleInteractionRepository $guzzleInteractionRepository,
        ModelRepository $modelRepository
    )
    {
        $this->guzzleInteractionRepository = $guzzleInteractionRepository;
        $this->modelRepository = $modelRepository;
    }

    public function __invoke(ValueObjectAttribute $attribute, Params $scoring): void
    {

        /**
         * Example of violated Dependency Inversion principle on crm-business (OfferController.php line 44)
         *
         * $interaction = (new InteractionService()->store(new CreateInteractionService($scoring))->getParameters());
         *
         * You don't should pass a new class instance on the parameter function, must work with interfaces!
         *
         * Example of best practices to do that:
         */
        $interaction = Interaction::create($scoring);

        $this->guzzleInteractionRepository->__invoke($interaction->params());
    }
}