<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Susu\GoalGetter;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Customer\Pin\PinApprovalRequest;
use Domain\Susu\GoalGetter\Actions\GoalGetterSusuApprovalAction;

final class GoalGetterSusuApprovalController extends Controller
{
    public function __invoke(string $susu, PinApprovalRequest $request): array
    {
        // Execute and return the GoalGetterSusuApprovalAction
        return GoalGetterSusuApprovalAction::execute(customer: auth()->user(), susu: $susu, request: $request->validated());
    }
}
