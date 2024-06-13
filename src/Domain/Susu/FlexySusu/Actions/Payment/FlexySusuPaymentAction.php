<?php

declare(strict_types=1);

namespace Domain\Susu\FlexySusu\Actions\Payment;

use App\Services\Susu\Requests\FlexySusu\Payment\FlexySusuPaymentRequest;
use Domain\Mobile\Models\Customer;

final class FlexySusuPaymentAction
{
    public static function execute(Customer $customer, string $susu, array $request): array
    {
        // Execute the FlexySusuCreateRequest
        return (new FlexySusuPaymentRequest)->execute(customer: $customer, susu: $susu, request: $request);
    }
}