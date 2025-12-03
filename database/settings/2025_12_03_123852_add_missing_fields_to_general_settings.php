<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // Add missing fields to general settings
        $this->migrator->add('general.site_phone_sub', null);
        $this->migrator->add('general.logo', null);
        $this->migrator->add('general.logo_alt', null);
        $this->migrator->add('general.favicon', null);
        $this->migrator->add('general.footer_description', null);
        $this->migrator->add('general.youtube_url', null);
        $this->migrator->add('general.linkedin_url', null);
        $this->migrator->add('general.viber_url', null);
        $this->migrator->add('general.homepage_youtube_slider', null);
    }
};
