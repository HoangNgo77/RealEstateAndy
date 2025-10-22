<?php

namespace App\Filament\Resources\Amentities\Pages;

use App\Filament\Resources\Amentities\AmentityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAmentities extends ListRecords
{
    protected static string $resource = AmentityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
