<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_supplier')
                    ->required(),
                TextInput::make('kontak_supplier')
                    ->required(),
                TextInput::make('alamat_supplier'),
            ]);
    }
}
