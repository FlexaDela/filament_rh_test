<?php

namespace App\Filament\Admin\Resources\Workers\RelationManagers;

use App\Filament\Admin\Resources\Workers\WorkerResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Override;

class AddresRelationManager extends RelationManager
{
    protected static string $relationship = 'addres';

    #[Override]
    public static function getModelLabel(): ?string
    {
        return 'endereço';
    }

    protected static ?string $title = 'Endereço de servidor';

    protected static ?string $relatedResource = WorkerResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema
        ->components([

            TextInput::make('cep')
            ->placeholder('00000-00')
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
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->emptyStateActions([
                Action::make('create')
                ->label('Criar endereço')
                ->icon('heroicon-m-plus')
                ->button(),
            ])
            ->emptyStateDescription('Este servidor não possue endereço cadastrado')
            ->columns([
                TextColumn::make('cep')
                ->label('CEP'),
                TextColumn::make('street')
                ->label('Rua'),
                TextColumn::make('neighborhood')
                ->label('Bairro'),
                TextColumn::make('type_of_residence')
                ->label('Tipo de residencia'),
                TextColumn::make('house_number')
                ->label('Numero da residencia')
            ])
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
