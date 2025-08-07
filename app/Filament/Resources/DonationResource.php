<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonationResource\Pages;
use App\Filament\Resources\DonationResource\RelationManagers;
use App\Models\Donation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonationResource extends Resource
{
    protected static ?string $model = Donation::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function getNavigationLabel(): string
    {
        return 'Dons';
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Dons';
    }

    public static function getModelLabel(): string
    {
        return 'Dons';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Dons';
    }
       public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donor_name')
                    ->searchable()
                    ->label('Donateur'),
                TextColumn::make('amount')
                    ->label('Montanr'),
                TextColumn::make('payment_method_id')
                    ->label('Methode de Payement'),
                TextColumn::make('message')
                    ->label('Message'),
                // TextColumn::make('donated_at'),
                TextColumn::make('donated_at')
                    ->label('Création'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListDonations::route('/'),
            'create' => Pages\CreateDonation::route('/create'),
            // 'edit' => Pages\EditDonation::route('/{record}/edit'),
        ];
    }
}
