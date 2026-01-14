<?php

namespace App\Filament\Resources\MaterialKeluars\Pages;

use App\Filament\Resources\MaterialKeluars\MaterialKeluarResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMaterialKeluar extends ViewRecord
{
    protected static string $resource = MaterialKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
