<?php

namespace App\Actions\HomePage;

use App\Classes\BaseAction;
use App\Models\Setting; // Ensure you have this model
use Inertia\Inertia;

class TermsAndConditionsAction extends BaseAction
{
    public function handle()
    {
        // Fetch the terms and conditions from the settings
        $terms = Setting::where('key', 'terms_and_conditions')->first();

        // Return the Inertia response with the terms and title
        return Inertia::render('Frontend/Settings/Terms', [
            'terms' => $terms,
            'title' => __('base.terms_and_conditions') // Pass the title to the Inertia component
        ]);
    }
}
