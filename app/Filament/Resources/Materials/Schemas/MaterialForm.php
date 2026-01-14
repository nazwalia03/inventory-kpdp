<?php

namespace App\Filament\Resources\Materials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
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
                FileUpload::make('gambar')
                    ->required(),
                Select::make('id_kategori')
                    ->relationship('kategori', 'kategori_material')
                    ->required(),
                Select::make('id_satuan')
                    ->relationship('satuan', 'satuan_material')
                    ->required(),
                TextInput::make('stok')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('harga')
                    ->prefix('Rp ')
                    ->required()
                    ->numeric(),
            ]);
    }
}
