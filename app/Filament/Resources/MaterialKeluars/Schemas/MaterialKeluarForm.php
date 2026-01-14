<?php

namespace App\Filament\Resources\MaterialKeluars\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MaterialKeluarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('tanggal_keluar')
                    ->required(),
                Select::make('material_id')
                    ->label('Material')
                    ->relationship('material', 'nama_material')
                    ->searchable()
                    ->required(),
                TextInput::make('jumlah_keluar')
                    ->required()
                    ->minValue(1)
                    ->numeric(),
                TextInput::make('tujuan')
                    ->required(),
            ]);
    }
}
