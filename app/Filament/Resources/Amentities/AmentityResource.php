<?php

namespace App\Filament\Resources\Amentities;

use App\Filament\Resources\Amentities\Pages\CreateAmentity;
use App\Filament\Resources\Amentities\Pages\EditAmentity;
use App\Filament\Resources\Amentities\Pages\ListAmentities;
use App\Filament\Resources\Amentities\Schemas\AmentityForm;
use App\Filament\Resources\Amentities\Tables\AmentitiesTable;
use App\Models\Amentity;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AmentityResource extends Resource
{
    protected static ?string $model = Amentity::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AmentityForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AmentitiesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAmentities::route('/'),
            'create' => CreateAmentity::route('/create'),
            'edit' => EditAmentity::route('/{record}/edit'),
        ];
    }
}
