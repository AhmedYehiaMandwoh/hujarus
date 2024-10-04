<?php

namespace Database\Seeders;

use App\Enums\SettingsKeysEnum;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createSettings();
    }

    /**
     * Create default settings in the database with dummy values.
     */
    private function createSettings(): void
    {
        $settings = [
            ['key' => SettingsKeysEnum::PRIVACY_POLICY->value, 'value' => 'We respect your privacy and protect your data.'],
            ['key' => SettingsKeysEnum::TERMS_AND_CONDITIONS->value, 'value' => 'By using this service, you agree to our terms.'],
            ['key' => SettingsKeysEnum::LOCATION->value, 'value' => 'New York, USA'],
            ['key' => SettingsKeysEnum::PHONE->value, 'value' => '+1 (555) 123-4567'],
            ['key' => SettingsKeysEnum::EMAIL->value, 'value' => 'info@example.com'],
        ];

        foreach ($settings as $setting) {
            Setting::firstOrCreate(
                ['key' => $setting['key']], 
                ['value' => $setting['value']]
            );
        }
    }
}
