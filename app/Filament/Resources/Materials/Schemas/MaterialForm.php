<?php

namespace App\Filament\Resources\Materials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MaterialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_material')
                    ->required(),
                TextInput::make('kategori')
                    ->required(),
                TextInput::make('satuan')
                    ->required(),
                TextInput::make('stok')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
