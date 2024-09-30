<?php

namespace App\Actions\Apis\Clients\Adress;

use App\Classes\BaseAction;
use App\Models\Address;
use Illuminate\Http\JsonResponse;

class ClientAddressFetchAllAction extends BaseAction
{
    public function handle(): JsonResponse
    {
        $addresses = Address::all();
        return response()->json([
            'success' => true,
            'data' => $addresses
        ]);
    }
}
