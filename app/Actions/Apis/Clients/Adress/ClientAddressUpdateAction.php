<?php

namespace App\Actions\Apis\Clients\Adress;

use App\Classes\BaseAction;
use App\Http\Requests\Apis\ClientAddressRequest;
use App\Models\Address;
use App\Traits\ApiResponseTrait;

class ClientAddressUpdateAction extends BaseAction
{
    use ApiResponseTrait;

    public function handle(Address $address, ClientAddressRequest $request)
    {
        $validated_data = $request->validated();
        $address->update($validated_data);
        return $this->apiSuccessMessage('Updated Successfully');
    }
}
