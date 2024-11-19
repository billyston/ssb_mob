<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Susu\PersonalSusu\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Susu\Personal\PersonalSusuCreateRequest;
use Domain\Susu\PersonalSusu\Actions\Account\PersonalSusuCreateAction;

final class PersonalSusuCreateController extends Controller
{
    public function __invoke(PersonalSusuCreateRequest $request): array
    {
        // Execute and return the PersonalSusuCreateAction
        return PersonalSusuCreateAction::execute(customer: auth()->user(), request: $request->validated());
    }
}