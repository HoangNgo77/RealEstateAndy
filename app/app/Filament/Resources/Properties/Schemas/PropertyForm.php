<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->numeric(),
                DateTimePicker::make('published_at'),

                Section::make('Property Details')
                    ->components([
                        TextInput::make('type'),
                        TextInput::make('bedrooms')
                            ->numeric(),
                        TextInput::make('bathrooms')
                            ->numeric(),
                        TextInput::make('area'),
                        TextInput::make('purpose'),
                        TextInput::make('room')
                            ->numeric(),
                        TextInput::make('bigyard'),
                        TextInput::make('elevator'),
                        TextInput::make('wifi'),
                        TextInput::make('builded_year')
                            ->numeric(),
                        TextInput::make('parking')
                            ->numeric(),
                    ])
                    ->columns(3),
                
                Section::make('Gallery')
                    ->components([
                        SpatieMediaLibraryFileUpload::make('images')
                            ->collection('images')
                            ->multiple()
                            ->image()
                    ])
            ])
            ->columns(1);
    }
}
