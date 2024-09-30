<?php

namespace App\Actions\Apis\Clients;

use App\Classes\BaseAction;
use App\Enums\StoragePathEnum;
use App\Http\Requests\Apis\ClientApiLoginRequest;
use App\Http\Resources\ClientProviderResource;
use App\Models\Client;
use App\Services\StorageService;
use Illuminate\Support\Facades\Hash;

class ClientLoginAction extends BaseAction
{
    public function handle(ClientApiLoginRequest $request)
    {
        $validated_data = $request->validated();
        
        // Find client by email or phone
        $client = Client::where('email', $validated_data['email_or_phone'])
                        ->orWhere('phone', $validated_data['email_or_phone'])
                        ->first();
        // Check if client exists and the password is correct
        if ($client && Hash::check($validated_data['password'], $client->password)) {
            return $this->apiResponseMobile(__('base.login_successfully'), [
                'user' => ClientProviderResource::make($client),
                'token' => $client->createToken('client-token')->plainTextToken,
            ]);
        }

        // If credentials are incorrect, return an error response
        return $this->apiResponseMobile(__('base.login_failed'), [], 401);
    }
}
