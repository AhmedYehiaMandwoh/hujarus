<?php

namespace App\Http\Requests\Apis;

use App\Classes\Helpmate;
use App\Rules\{EmailRule, ImageRule, PasswordRule, AustralianPhoneNumberRule, SmallTextRule};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiUpdateAuthRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Request $request): array
    {
        
        return [
          'name' => ['required', new SmallTextRule()],
            'email' => ['required', Rule::unique(Client::class, 'email')->whereNull('deleted_at'), new EmailRule()],
            'phone' => ['required', Rule::unique(Client::class, 'phone')->whereNull('deleted_at'), new AustralianPhoneNumberRule()],
            'password' => ['required', 'confirmed', new PasswordRule()],
            'avatar' => ['nullable', new ImageRule()],
        ];
    }
}
