<?php

namespace App\Actions\HomePage;

use App\Classes\BaseAction;
use App\Models\Setting; // Ensure you have this model
use Inertia\Inertia;

class TermsAndConditionsAction extends BaseAction
{
    public function handle()
    {
        $terms = Setting::where('key', 'terms_and_conditions')->first();

        // Return categories to home.vue as props
        return Inertia::render('Frontend/Settings/Terms', [
            'terms' => $terms
        ]);
    }
}
