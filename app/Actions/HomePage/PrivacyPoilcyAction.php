<?php

namespace App\Actions\HomePage;

use App\Classes\BaseAction;
use App\Models\Setting; // Ensure you have this model
use Inertia\Inertia;

class PrivacyPoilcyAction extends BaseAction
{
    public function handle()
    {
        $privacy_policy = Setting::where('key', 'privacy_policy')->first();

        // Return categories to home.vue as props
        return Inertia::render('Frontend/Settings/Privacy', [
            'privacy_policy' => $privacy_policy
        ]);
    }
}
