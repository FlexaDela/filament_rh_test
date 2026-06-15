<?php

namespace App\Filament\Admin\Resources\Workers\Pages;

use App\Filament\Admin\Resources\Workers\WorkerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWorker extends EditRecord
{
    protected static string $resource = WorkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
