<?php

namespace App\Actions\Apis\Clients\Adress;

use App\Classes\BaseAction;
use App\Classes\Helpmate;
use App\Http\Requests\Apis\ClientAddressRequest;
use App\Models\Address;

class ClientAddressStoreAction extends BaseAction
{
    public function handle(ClientAddressRequest $request): \Illuminate\Http\JsonResponse
    {
        $validated_data = $request->validated();
        $address = Address::query()->create($validated_data);
        return $this->apiResponseMobile("Added Successfully");

    }
}
