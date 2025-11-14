<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_description', 'Real Estate Management System');
        $this->migrator->add('general.site_email', 'admin@example.com');
        $this->migrator->add('general.site_phone', '+1234567890');
        $this->migrator->add('general.site_address', '123 Real Estate St, City, Country');
        $this->migrator->add('general.facebook_url', null);
        $this->migrator->add('general.twitter_url', null);
        $this->migrator->add('general.instagram_url', null);
        $this->migrator->add('general.enable_contact_form', true);
        $this->migrator->add('general.enable_maintenance_mode', false);
    }
};
