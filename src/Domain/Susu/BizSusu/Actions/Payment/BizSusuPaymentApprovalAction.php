<?php

declare(strict_types=1);

namespace Domain\Susu\BizSusu\Actions\Payment;

use App\Services\Susu\Requests\BizSusu\Payment\BizSusuPaymentApprovalRequest;
use Domain\Mobile\Models\Customer;

final class BizSusuPaymentApprovalAction
{
    public static function execute(Customer $customer, string $susu, string $payment, array $request): array
    {
        // Execute the BizSusuCreateRequest
        return (new BizSusuPaymentApprovalRequest)->execute(customer: $customer, susu: $susu, payment: $payment, request: $request);
    }
}