<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Susu\Flexy;

use App\Http\Controllers\Controller;
use Domain\Susu\Flexy\Actions\FlexySusuCollectionAction;

final class FlexySusuCollectionController extends Controller
{
    public function __invoke(): array
    {
        // Execute and return the FlexySusuCollectionAction
        return FlexySusuCollectionAction::execute(customer: auth()->user());
    }
}
