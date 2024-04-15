<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appLogoUrl = ('/assets/images/infyom-logo.png');
        $faviconUrl = ('/web/media/logos/favicon-infyom.png');

        Setting::create(['key' => 'app_name', 'value' => 'Pmit JUCard']);
        Setting::create(['key' => 'app_logo', 'value' => $appLogoUrl]);
        Setting::create(['key' => 'favicon', 'value' => $faviconUrl]);
        Setting::create(['key' => 'email', 'value' => 'hasib.9437.hu@gmail.com']);
        Setting::create(['key' => 'phone', 'value' => '01738356180']);
        Setting::create(['key' => 'address',
            'value' => 'Jahangirnagar University',
        ]);
        Setting::create(['key' => 'prefix_code', 'value' => '880']);
        Setting::create(['key' => 'plan_expire_notification', 'value' => '5']);
    }
}
