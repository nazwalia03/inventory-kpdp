<?php

namespace App\Filament\Resources\MaterialKeluars\Pages;

use App\Filament\Resources\MaterialKeluars\MaterialKeluarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMaterialKeluars extends ListRecords
{
    protected static string $resource = MaterialKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
