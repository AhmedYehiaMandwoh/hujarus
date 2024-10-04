<?php

namespace App\Actions\HomePage;

use App\Classes\BaseAction;
use App\Models\Setting; // Ensure you have this model
use Illuminate\Http\JsonResponse;

class SettingsAction extends BaseAction
{
    public function handle(): JsonResponse
    {
        // Fetch settings from the database
        $settings = Setting::all(); // Adjust according to your structure
        // Return a JSON response
        return response()->json([
            'settings' => $settings,
        ]);
    }
}
