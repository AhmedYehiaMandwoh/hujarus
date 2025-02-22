<?php

namespace App\Http\Requests;

use App\Rules\{SmallTextRule, ImageRule, LargeTextRule};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Request $request): array
    {
        return [
            'title' => [
                'required', new SmallTextRule(),
                Rule::unique('categories', 'title')
                    ->ignore($request->id)
            ],
            'slug' => [
                'required', new SmallTextRule(),
                Rule::unique('categories', 'slug')
                    ->ignore($request->id)
            ],
            'description' => [
                'nullable', new LargeTextRule()
            ],
            'avatar' => ['nullable', new ImageRule()],
            'icon' => 'required',
            'is_active' => 'nullable|boolean',

        ];
    }
}
