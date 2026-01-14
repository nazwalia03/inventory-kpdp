<?php

namespace App\Filament\Resources\MaterialMasuks\Pages;

use App\Filament\Resources\MaterialMasuks\MaterialMasukResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMaterialMasuks extends ListRecords
{
    protected static string $resource = MaterialMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
