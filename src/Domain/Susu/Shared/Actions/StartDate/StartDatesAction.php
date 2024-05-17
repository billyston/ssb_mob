<?php

declare(strict_types=1);

namespace Domain\Susu\Shared\Actions\StartDate;

use App\Services\Susu\Requests\Shared\StartDatesRequest;

final class StartDatesAction
{
    public static function execute(): array
    {
        // Execute the StartDatesRequest
        return (new StartDatesRequest)->execute();
    }
}