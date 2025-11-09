<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Content')
                    ->components([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('slug')
                            ->required(),
                        RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('excerpt')
                            ->columnSpanFull(),
                    ])->columnSpan(2),
                Section::make('Meta')
                    ->components([
                        SpatieMediaLibraryFileUpload::make('featured_image')
                            ->collection('featured_image')
                            ->image(),
                        Toggle::make('is_published'),
                        DateTimePicker::make('published_at'),
                        Select::make('user_id')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload(),
                    ])->columnSpan(1),
            ])->columns(3);
    }
}
