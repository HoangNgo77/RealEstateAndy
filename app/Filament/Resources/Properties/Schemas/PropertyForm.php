<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
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
                        Select::make('type')
                            ->options([
                                'house' => 'House',
                                'apartment' => 'Apartment',
                                'condo' => 'Condo',
                                'land' => 'Land',
                                'commercial' => 'Commercial',
                            ]),
                        TextInput::make('bedroom')
                            ->numeric(),
                        TextInput::make('bathroom')
                            ->numeric(),
                        TextInput::make('area'),
                        Select::make('purpose')
                            ->options([
                                'sale' => 'Sale',
                                'rent' => 'Rent',
                            ]),
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
                        SpatieMediaLibraryFileUpload::make('featured_image')
                            ->collection('featured_image')
                            ->image()
                    ])
            ])
            ->columns(1);
    }
}
