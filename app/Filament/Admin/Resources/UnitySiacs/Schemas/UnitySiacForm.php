<?php

namespace App\Filament\Admin\Resources\UnitySiacs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UnitySiacForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('neighborhood')
                    ->label('Bairro')
                    ->required(),
                TextInput::make('street')
                    ->label('Rua')
                    ->required(),
                TextInput::make('cep')
                    ->label('CEP')
                    ->required(),
            ]);
    }
}
