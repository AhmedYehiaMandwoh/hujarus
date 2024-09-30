<?php

namespace App\Actions\Apis\Clients\Adress;

use App\Classes\BaseAction;
use App\Models\Address;

class ClientAddressDeleteAction extends BaseAction
{
    public function handle(Address $address)
    {
        if ($this->tryDelete($address, false)) {
            return $this->apiResponseMobile("Deleted successfully");
        }
        return $this->apiCantDelete();
    }
}
