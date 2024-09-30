<?php

namespace App\Actions\Apis\Clients;

use App\Classes\BaseAction;
use App\Classes\Helpmate;
use App\Enums\StoragePathEnum;
use App\Http\Requests\Apis\ClientApiUpdateImageRequest;
use App\Http\Resources\ClientProviderResource;
use App\Services\StorageService;
use App\Models\Client;

class ClientsUpdateProfileImageAction extends BaseAction
{
    public function handle(ClientApiUpdateImageRequest $request)
    {
        $validated_data = $request->validated();
        $client  = Client::where("id", $validated_data['client_id'])->first();
        if (data_get($validated_data, 'avatar')) {
            $validated_data['avatar'] = StorageService::publicUpload(StoragePathEnum::CLIENT_AVATAR, $request->file('avatar'), oldFileToDeletePath: $client->avatar);
        } else {
            unset($validated_data['avatar']);
        }
        $client->update($validated_data);
        return $this->apiResponseMobile(__('base.updated_successfully'), [
            'user' => ClientProviderResource::make($client),
        ]);    
    }
}
