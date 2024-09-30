<?php


namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Lang;

class AustralianPhoneNumberRule implements Rule
{
    public function passes($attribute, $value)
    {
        // Regex pattern for Australian mobile numbers
        return preg_match("/^(\+?61|0)4\d{8}$/", $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return Lang::get('validation.phone');
    }
}
