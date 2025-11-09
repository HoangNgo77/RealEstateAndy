<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Content')
                    ->components([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('slug')
                            ->required(),
                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),
                Section::make('Property Details')
                    ->components([
                        Section::make('Basic Information')
                            ->components([
                                Select::make('type')
                                    ->options([
                                        'house' => 'House',
                                        'apartment' => 'Apartment',
                                        'condo' => 'Condo',
                                        'land' => 'Land',
                                        'commercial' => 'Commercial',
                                    ]),
                                Select::make('purpose')
                                    ->options([
                                        'sale' => 'Sale',
                                        'rent' => 'Rent',
                                    ]),
                                TextInput::make('area'),
                                TextInput::make('builded_year')
                                    ->numeric(),
                            ])->columns(2),
                        Section::make('Rooms')
                            ->components([
                                TextInput::make('bedroom')
                                    ->numeric(),
                                TextInput::make('bathroom')
                                    ->numeric(),
                                TextInput::make('room')
                                    ->numeric(),
                            ])->columns(3),
                        Section::make('Features')
                            ->components([
                                TextInput::make('bigyard'),
                                TextInput::make('elevator'),
                                TextInput::make('wifi'),
                                TextInput::make('parking')
                                    ->numeric(),
                            ])->columns(4),
                    ])->columnSpanFull(),
                Section::make('Meta & Gallery')
                    ->components([
                        Section::make('Meta')
                            ->components([
                                DateTimePicker::make('published_at'),
                                Select::make('amenities')
                                    ->multiple()
                                    ->relationship(name: 'amenities', titleAttribute: 'name')
                                    ->searchable()
                                    ->preload(),
                                Select::make('user_id')
                                    ->relationship('user', 'name')
                                    ->searchable()
                                    ->preload(),
                            ]),
                        Section::make('Gallery')
                            ->components([
                                SpatieMediaLibraryFileUpload::make('featured_image')
                                    ->collection('featured_image')
                                    ->image(),
                            ]),
                    ])->columns(2),
            ])
            ->columns(1);
    }
}
