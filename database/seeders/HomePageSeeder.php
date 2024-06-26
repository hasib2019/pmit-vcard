<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homePageBanner = ('/front/images/home.png');

        Setting::create(['key' => 'home_page_title', 'value' => 'Pmit JUCard']);
        Setting::create(['key' => 'home_page_banner', 'value' => $homePageBanner]);
    }
}
