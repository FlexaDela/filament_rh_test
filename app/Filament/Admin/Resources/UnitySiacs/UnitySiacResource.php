<?php

namespace App\Filament\Admin\Resources\UnitySiacs;

use App\Filament\Admin\Resources\UnitySiacs\Pages\CreateUnitySiac;
use App\Filament\Admin\Resources\UnitySiacs\Pages\EditUnitySiac;
use App\Filament\Admin\Resources\UnitySiacs\Pages\ListUnitySiacs;
use App\Filament\Admin\Resources\UnitySiacs\Schemas\UnitySiacForm;
use App\Filament\Admin\Resources\UnitySiacs\Tables\UnitySiacsTable;
use App\Models\UnitySiac;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UnitySiacResource extends Resource
{
    protected static ?string $model = UnitySiac::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'UnitySiac';

    public static function form(Schema $schema): Schema
    {
        return UnitySiacForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UnitySiacsTable::configure($table);
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
            'index' => ListUnitySiacs::route('/'),
            'create' => CreateUnitySiac::route('/create'),
            'edit' => EditUnitySiac::route('/{record}/edit'),
        ];
    }
}
