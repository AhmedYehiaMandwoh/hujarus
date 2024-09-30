<?php

namespace App\Http\Requests\Apis;

use App\Classes\Helpmate;
use App\Rules\ImageRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientApiUpdateImageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Request $request): array
    {
        
        return [
            'client_id' => 'required',
            'avatar' => ['required', new ImageRule()],
        ];
    }
}
