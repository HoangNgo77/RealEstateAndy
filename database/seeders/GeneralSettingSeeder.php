<?php

namespace Database\Seeders;

use App\Settings\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = app(GeneralSetting::class);

        // Site Information
        $settings->site_name = 'MrHoang RealEstate';
        $settings->site_description = 'Real Estate Management System';
        $settings->site_email = 'admin@mrhoang.com';
        $settings->site_phone = '+1234567890';
        $settings->site_phone_sub = '+0987654321';
        $settings->site_address = '123 Real Estate St, City, Country';

        // Branding
        $settings->logo = null;
        $settings->logo_alt = 'MrHoang RealEstate Logo';
        $settings->favicon = null;
        $settings->footer_description = 'Your trusted partner in finding the perfect property. We offer comprehensive real estate services with a commitment to excellence.';

        // Social Media
        $settings->facebook_url = 'https://facebook.com/mrhoang';
        $settings->youtube_url = 'https://youtube.com/@mrhoang';
        $settings->linkedin_url = 'https://linkedin.com/company/mrhoang';
        $settings->viber_url = 'viber://chat?number=+1234567890';
        $settings->instagram_url = 'https://instagram.com/mrhoang';

        // Homepage
        $settings->homepage_youtube_slider = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';

        // System
        $settings->enable_contact_form = true;
        $settings->enable_maintenance_mode = false;

        $settings->save();
    }
}
