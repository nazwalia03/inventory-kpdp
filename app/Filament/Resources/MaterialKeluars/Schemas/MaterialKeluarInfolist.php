<?php

namespace App\Filament\Resources\MaterialKeluars\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MaterialKeluarInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('tanggal_keluar')
                    ->date(),
                TextEntry::make('material_id')
                    ->numeric(),
                TextEntry::make('jumlah_keluar')
                    ->numeric(),
                TextEntry::make('tujuan'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
