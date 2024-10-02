<?php

namespace App\Http\Requests;

use App\Rules\{SmallTextRule, ImageRule, LargeTextRule};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EnrollRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'parent_name' => [
                'required', new SmallTextRule(),
            ],
            'student_name' => [
                'required', new SmallTextRule(),
            ],
            'student_age' => [
                'required', 'integer', 'min:1', 'max:120',
            ],
            'course_needed' => [
                'required', 'string',
            ],
            'phone_number' => [
                'required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', // Basic regex for phone number validation
            ],
            'email' => [
                'required', 'email', 'max:255',
            ],
            'country' => [
                'required', new SmallTextRule(),
            ],
            'days' => [
                'required', 'array', 'min:1', 'max:7',
            ],
            'time_from' => [
                'required', 'date_format:H:i',
            ],
            'time_to' => [
                'required', 'date_format:H:i', 'after:timeFrom',
            ],
            'time_zone' => [
                'required', new SmallTextRule(),
            ],
            'class_duration' => [
                'required', 'string',
            ],
            'preferred_teacher' => [
                'required', 'string', 'in:Male,Female',
            ],
            'goals' => [
                'nullable', new LargeTextRule(),
            ],
        ];
    }
}
