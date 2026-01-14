<?php

namespace App\Filament\Resources\MaterialMasuks\Pages;

use App\Filament\Resources\MaterialMasuks\MaterialMasukResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMaterialMasuk extends ViewRecord
{
    protected static string $resource = MaterialMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
