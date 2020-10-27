<?php

declare(strict_types=1);

namespace App\src\ModuleName\EntryPoint\Http\Controller;

use App\src\ModuleName\Application\UseCase\UseCaseCommand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

final class ActionController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        return new Response($this->dispatch(new UseCaseCommand($request->attribute)));

    }
}