<?php

namespace App\Filament\Admin\Resources\Workers\Schemas;

use App\Enums\Education;
use App\Enums\Gender;
use App\Enums\GenderIdentity;
use App\Enums\Uf;
use App\Models\UnitySiac;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WorkerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->label('Nome')
                ->required(),

                Select::make('gender')
                ->label('Sexualidade')
                ->options(Gender::class)
                ->required()
                ->name(false),

                TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),

                Select::make('unity_siac_id')
                ->label('Unidade')
                ->relationship(name: 'unitySiac', titleAttribute: 'neighborhood')
                ->searchable()
                ->preload()
                ->required(),

                DatePicker::make('birth_day')
                ->label('Data de nascimento')
                ->format('d/m/Y')
                ->required(),

                TextInput::make('cpf')
                ->label('CPF')
                ->placeholder('xxx.xxx.xxx-xx')
                ->unique('worker','cpf')
                ->regex('')
                ->required(),

                Select::make('uf')
                ->label('UF')
                ->options(Uf::class)
                ->required(),

                Select::make('education')
                ->label('Nivel de escolaridade')
                ->options(Education::class)
                ->required(),

                Select::make('gener_identity')
                ->label('Identidade de genero')
                ->options(GenderIdentity::class),

                TextInput::make('social_name')
                ->label('Nome social'),
            ]);
    }
}
