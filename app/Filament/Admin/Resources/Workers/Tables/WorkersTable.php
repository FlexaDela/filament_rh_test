<?php

namespace App\Filament\Admin\Resources\Workers\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WorkersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Nome'),

                TextColumn::make('unitySiac.neighborhood')
                ->label('Unidade'),

                TextColumn::make('email')
                ->icon(Heroicon::Envelope)
                ->label('Email'),

                TextColumn::make('birth_day')
                ->label('Data de aniversario')
                ->date()
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
