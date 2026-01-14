<?php

namespace App\Filament\Resources\MaterialMasuks;

use App\Filament\Resources\MaterialMasuks\Pages\CreateMaterialMasuk;
use App\Filament\Resources\MaterialMasuks\Pages\EditMaterialMasuk;
use App\Filament\Resources\MaterialMasuks\Pages\ListMaterialMasuks;
use App\Filament\Resources\MaterialMasuks\Pages\ViewMaterialMasuk;
use App\Filament\Resources\MaterialMasuks\Schemas\MaterialMasukForm;
use App\Filament\Resources\MaterialMasuks\Schemas\MaterialMasukInfolist;
use App\Filament\Resources\MaterialMasuks\Tables\MaterialMasuksTable;
use App\Models\MaterialMasuk;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MaterialMasukResource extends Resource
{
    protected static ?string $model = MaterialMasuk::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArrowDownOnSquare;

    protected static string|UnitEnum|null $navigationGroup = 'Transaksi';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'MaterialMasuk';

    public static function form(Schema $schema): Schema
    {
        return MaterialMasukForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MaterialMasukInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MaterialMasuksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMaterialMasuks::route('/'),
            'create' => CreateMaterialMasuk::route('/create'),
            'view' => ViewMaterialMasuk::route('/{record}'),
            'edit' => EditMaterialMasuk::route('/{record}/edit'),
        ];
    }
}
