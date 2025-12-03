<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{
    // Site Information
    public string $site_name = 'MrHoang RealEstate';
    public string $site_description = 'Real Estate Management System';
    public string $site_email = 'admin@mrhoang.com';
    public string $site_phone = '+1234567890';
    public ?string $site_phone_sub = null;
    public string $site_address = '123 Real Estate St, City, Country';

    // Branding
    public ?string $logo = null;
    public ?string $logo_alt = null;
    public ?string $favicon = null;
    public ?string $footer_description = null;

    // Social Media
    public ?string $facebook_url = null;
    public ?string $youtube_url = null;
    public ?string $linkedin_url = null;
    public ?string $viber_url = null;
    public ?string $instagram_url = null;

    // Homepage Settings
    public ?string $homepage_youtube_slider = null;

    // System Settings
    public bool $enable_contact_form = true;
    public bool $enable_maintenance_mode = false;

    public static function group(): string
    {
        return 'general';
    }

    public static function encrypted(): array
    {
        return [];
    }
}
