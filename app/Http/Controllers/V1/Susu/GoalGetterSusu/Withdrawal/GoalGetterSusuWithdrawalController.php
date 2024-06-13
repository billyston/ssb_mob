<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Susu\GoalGetterSusu\Withdrawal;

use App\Http\Controllers\Controller;
use Domain\Susu\GoalGetterSusu\Actions\Withdrawal\GoalGetterSusuWithdrawalAction;
use Illuminate\Http\Request;

final class GoalGetterSusuWithdrawalController extends Controller
{
    public function __invoke(string $susu, Request $request): array
    {
        // Execute and return the GoalGetterSusuWithdrawalAction
        return GoalGetterSusuWithdrawalAction::execute(customer: auth()->user(), susu: $susu, request: $request->all());
    }
}