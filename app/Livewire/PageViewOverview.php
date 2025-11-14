<?php

namespace App\Livewire;

use Balajidharma\LaravelViewable\Models\Viewable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PageViewOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total views', Viewable::count()),
            Stat::make('Property views', Viewable::where('viewable_type', 'App\Models\Property')->count()),
            Stat::make('Blog views', Viewable::where('viewable_type', 'App\Models\Post')->count()),
        ];
    }
}
