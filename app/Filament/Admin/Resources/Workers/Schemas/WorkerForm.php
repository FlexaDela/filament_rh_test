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
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class WorkerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Tabs::make('Tabs')
                ->tabs([
                    Tab::make('Worker')
                    ->icon(Heroicon::User)
                    ->schema([
                        TextInput::make('name')
                        ->label('Nome')
                        ->required(),

                        Select::make('gender')
                        ->label('Genero')
                        ->options(Gender::class)
                        ->required()
                        ->native(false),

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

                        Select::make('sector_id')
                        ->label('Setor')
                        ->relationship(name:'sector', titleAttribute:'name')
                        ->searchable()
                        ->preload()
                        ->required(),

                        DatePicker::make('birth_day')
                        ->label('Data de nascimento')
                        ->native(false)
                        ->displayFormat('d/m/Y')
                        ->format('d/m/Y')
                        ->required(),

                        TextInput::make('cpf')
                        ->label('CPF')
                        ->unique(ignoreRecord: true)
                        ->mask('999.999.999-99')
                        ->required(),

                        Select::make('uf')
                        ->label('UF')
                        ->options(Uf::class)
                        ->required(),

                        Select::make('education')
                        ->label('Nivel de escolaridade')
                        ->options(Education::class)
                        ->required(),

                        Select::make('gender_identity')
                        ->label('Identidade de genero')
                        ->options(GenderIdentity::class),

                        TextInput::make('social_name')
                        ->label('Nome social'),
                    ]),

                    Tab::make('Addres')
                    ->icon(Heroicon::MapPin)
                    ->label('Endereço')
                    ->schema([
                        Fieldset::make('Dados Residenciais')
                        ->relationship('addres')
                        ->columnSpanFull()
                        ->columns(4)
                        ->schema([
                            TextInput::make('cep')
                            ->placeholder('00000-000')
                            ->mask('99999-999')
                            ->required()
                            ->label('CEP'),

                            TextInput::make('street')
                            ->required()
                            ->placeholder('Av. Resenha das ideias')
                            ->label('Rua'),

                            TextInput::make('neighborhood')
                            ->label('Bairro')
                            ->placeholder('Centro')
                            ->required(),

                            TextInput::make('type_of_residence')
                            ->required()
                            ->placeholder('Casa, apartamento ou condominio')
                            ->label('Tipo de residencia'),

                            TextInput::make('house_number')
                            ->placeholder('1234')
                            ->required()
                            ->label('Numero da residencia')
                        ])
                    ])

                ])
                ->columns(2)
            ]);
    }
}
