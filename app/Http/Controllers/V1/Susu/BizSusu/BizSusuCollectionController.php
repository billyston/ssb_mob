<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Susu\BizSusu;

use App\Http\Controllers\Controller;
use Domain\Susu\BizSusu\Actions\BizSusuCollectionAction;

final class BizSusuCollectionController extends Controller
{
    public function __invoke(): array
    {
        // Execute and return the BizSusuCollectionAction
        return BizSusuCollectionAction::execute(customer: auth()->user());
    }
}