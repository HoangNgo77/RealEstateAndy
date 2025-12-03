<?php

namespace App\View\Composers;

use App\Settings\GeneralSetting;
use Illuminate\View\View;

class SettingsComposer
{
    public function __construct(
        protected GeneralSetting $settings
    ) {}

    public function compose(View $view): void
    {
        $view->with('settings', $this->settings);
    }
}
