<?php

declare(strict_types=1);

namespace App\Services\Customer\Requests\Kyc;

use App\Services\Customer\CustomerService;
use Domain\Mobile\Models\Customer;
use Illuminate\Support\Facades\Http;

final class CustomerServiceKycVerificationRequest
{
    public CustomerService $service;

    public function __construct()
    {
        $this->service = new CustomerService;
    }

    public function execute(Customer $customer, array $request): array
    {
        return Http::withHeaders(['Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json'])
            ->post(url: $this->service->base_url.$customer->resource_id.'/kycs', data: $request)
            ->json();
    }
}