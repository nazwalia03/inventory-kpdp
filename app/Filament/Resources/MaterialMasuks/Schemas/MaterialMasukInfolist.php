<?php

namespace App\Filament\Resources\MaterialMasuks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MaterialMasukInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('tanggal_masuk')
                    ->date(),
                TextEntry::make('supplier_id')
                    ->numeric(),
                TextEntry::make('material_id')
                    ->numeric(),
                TextEntry::make('jumlah_masuk')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
