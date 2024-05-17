<?php

declare(strict_types=1);

namespace App\Services\Customer\Requests\LinkedAccount;

use App\Services\Customer\CustomerService;
use Domain\Mobile\Models\Customer;
use Illuminate\Support\Facades\Http;

final class LinkNewAccountApprovalRequest
{
    public CustomerService $service;

    public function __construct()
    {
        $this->service = new CustomerService;
    }

    public function execute(Customer $customer, string $linked_account, array $request): array
    {
        return Http::withHeaders(['Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json'])->post(
            url: $this->service->base_url.$customer->resource_id.'/linked-accounts/'.$linked_account.'/approvals',
            data: $request,
        )->json();
    }
}