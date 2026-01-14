<?php

namespace App\Filament\Resources\MaterialMasuks\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MaterialMasukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('tanggal_masuk')
                    ->required(),
                Select::make('supplier_id')
                    ->label('Supplier')
                    ->relationship('supplier', 'nama_supplier')
                    ->searchable()
                    ->required(),
                Select::make('material_id')
                    ->label('Material')
                    ->relationship('material', 'nama_material')
                    ->searchable()
                    ->required(),
                TextInput::make('jumlah_masuk')
                    ->required()
                    ->minValue(1)
                    ->numeric(),
            ]);
    }
}
