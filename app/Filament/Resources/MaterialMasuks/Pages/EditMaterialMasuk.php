<?php

namespace App\Filament\Resources\MaterialMasuks\Pages;

use App\Filament\Resources\MaterialMasuks\MaterialMasukResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMaterialMasuk extends EditRecord
{
    protected static string $resource = MaterialMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
