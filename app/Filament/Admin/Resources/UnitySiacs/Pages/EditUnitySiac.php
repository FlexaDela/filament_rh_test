<?php

namespace App\Filament\Admin\Resources\UnitySiacs\Pages;

use App\Filament\Admin\Resources\UnitySiacs\UnitySiacResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUnitySiac extends EditRecord
{
    protected static string $resource = UnitySiacResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
