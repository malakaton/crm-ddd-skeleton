<?php

declare(strict_types=1);

namespace App\src\ModuleName\Domain;

use App\src\Interaction\Domain\InteractionRepository;

final class ModelCreator
{
    private InteractionRepository $interactionRepository;
    private ModelRepository $modelRepository;

    public function __construct(
        InteractionRepository $interactionRepository,
        ModelRepository $modelRepository
    )
    {
        $this->interactionRepository = $interactionRepository;
        $this->modelRepository = $modelRepository;
    }

    public function __invoke(ValueObjectAttribute $attribute): void
    {

        /**
         * Example of violated Dependency Inversion principle on crm-bussiness (OfferController.php line 44)
         *
         * $interaction = (new InteractionService()->store(new CreateInteractionService()));
         *
         * You don't should pass a new class instance on the parameter function, must work with interfaces!
         *
         * Example of best practices to do that:
         */

        $this->interactionRepository->store([]);
    }
}