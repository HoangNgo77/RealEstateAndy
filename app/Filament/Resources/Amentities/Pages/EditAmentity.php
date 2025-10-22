<?php

namespace App\Filament\Resources\Amentities\Pages;

use App\Filament\Resources\Amentities\AmentityResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAmentity extends EditRecord
{
    protected static string $resource = AmentityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
