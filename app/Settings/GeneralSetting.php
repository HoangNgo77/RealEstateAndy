<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{
    public string $site_name = 'MrHoang RealEstate';
    public string $site_description = 'Real Estate Management System';
    public string $site_email = 'admin@mrhoang.com';
    public string $site_phone = '+1234567890';
    public string $site_address = '123 Real Estate St, City, Country';
    public ?string $facebook_url = null;
    public ?string $twitter_url = null;
    public ?string $instagram_url = null;
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
