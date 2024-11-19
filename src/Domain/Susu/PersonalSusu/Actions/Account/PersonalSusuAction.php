<?php

declare(strict_types=1);

namespace Domain\Susu\PersonalSusu\Actions\Account;

use App\Services\Susu\Requests\PersonalSusu\Account\SusuServicePersonalSusuRequest;
use Domain\Mobile\Models\Customer;

final class PersonalSusuAction
{
    public static function execute(Customer $customer, string $susu, array $request): array
    {
        // Execute the PersonalSusuCreateRequest
        return (new SusuServicePersonalSusuRequest)->execute(customer: $customer, susu: $susu);
    }
}