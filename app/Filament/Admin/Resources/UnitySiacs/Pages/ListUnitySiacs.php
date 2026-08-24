<?php

namespace App\Filament\Admin\Resources\UnitySiacs\Pages;

use App\Filament\Admin\Resources\UnitySiacs\UnitySiacResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUnitySiacs extends ListRecords
{
    protected static string $resource = UnitySiacResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
