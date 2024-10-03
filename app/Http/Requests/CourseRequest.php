<?php

namespace App\Http\Requests;

use App\Rules\{SmallTextRule, ImageRule, LongTextRule};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseRequest extends FormRequest
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
                Rule::unique('courses', 'title') // Updated to 'courses' table
                    ->ignore($request->id)
            ],
            'description' => [
                'nullable', new LongTextRule()
            ],
            'avatar' => ['nullable', new ImageRule()],
            'category_id' => [
                'required', 
                Rule::exists('categories', 'id') // Ensures category exists in 'categories' table
            ],
            'price' => 'required|numeric|min:0', // Ensure price is numeric and non-negative
            'instructor' => 'required|string|max:255', // Validate instructor name
            'duration' => 'required|string|max:255', // Validate duration
            'student_count' => 'nullable|integer|min:0', // Ensure student_count is a non-negative integer
            'is_active' => 'nullable|boolean',
        ];
    }
}
