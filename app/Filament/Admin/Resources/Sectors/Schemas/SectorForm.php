<?php

namespace App\Filament\Admin\Resources\Sectors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SectorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required(),
            ]);
    }
}
