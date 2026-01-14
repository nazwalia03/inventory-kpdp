<?php

namespace App\Filament\Resources\MaterialKeluars\Pages;

use App\Filament\Resources\MaterialKeluars\MaterialKeluarResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMaterialKeluar extends EditRecord
{
    protected static string $resource = MaterialKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
