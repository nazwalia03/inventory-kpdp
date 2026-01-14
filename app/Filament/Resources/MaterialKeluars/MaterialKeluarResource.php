<?php

namespace App\Filament\Resources\MaterialKeluars;

use App\Filament\Resources\MaterialKeluars\Pages\CreateMaterialKeluar;
use App\Filament\Resources\MaterialKeluars\Pages\EditMaterialKeluar;
use App\Filament\Resources\MaterialKeluars\Pages\ListMaterialKeluars;
use App\Filament\Resources\MaterialKeluars\Pages\ViewMaterialKeluar;
use App\Filament\Resources\MaterialKeluars\Schemas\MaterialKeluarForm;
use App\Filament\Resources\MaterialKeluars\Schemas\MaterialKeluarInfolist;
use App\Filament\Resources\MaterialKeluars\Tables\MaterialKeluarsTable;
use App\Models\MaterialKeluar;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MaterialKeluarResource extends Resource
{
    protected static ?string $model = MaterialKeluar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArrowUpOnSquare;

    protected static string|UnitEnum|null $navigationGroup = 'Transaksi';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'MaterialKeluar';

    public static function form(Schema $schema): Schema
    {
        return MaterialKeluarForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MaterialKeluarInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MaterialKeluarsTable::configure($table);
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
            'index' => ListMaterialKeluars::route('/'),
            'create' => CreateMaterialKeluar::route('/create'),
            'view' => ViewMaterialKeluar::route('/{record}'),
            'edit' => EditMaterialKeluar::route('/{record}/edit'),
        ];
    }
}
