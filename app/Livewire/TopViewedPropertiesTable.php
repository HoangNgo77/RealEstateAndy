<?php

namespace App\Livewire;

use App\Models\Property;
use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;

class TopViewedPropertiesTable extends TableWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Property::query()->withCount('views')->whereHas('views')->orderByDesc('views_count')->limit(10))
            ->columns([
                SpatieMediaLibraryImageColumn::make('featured_image')
                    ->collection('featured_image'),
                TextColumn::make('name'),
                TextColumn::make('views_count')
                    ->label('Views'),
            ]);
    }
}
