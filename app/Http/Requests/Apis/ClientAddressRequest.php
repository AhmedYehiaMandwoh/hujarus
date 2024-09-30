<?php

namespace App\Http\Requests\Apis;
use App\Rules\{SmallTextRule, ImageRule};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientAddressRequest extends FormRequest
{
    public function rules(Request $request)
    {
        return [
            'client_id' => 'required',
            'name' => [
                'required', new SmallTextRule(),
                Rule::unique('addresses', 'name')
                    ->ignore($request->id)
            ],
            'type' => 'required|string',
            'full_address' => 'required|string',
            'phone_number' => 'nullable|string',
            
        ];
    }
}
