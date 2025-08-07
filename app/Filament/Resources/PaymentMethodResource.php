<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentMethodResource\Pages;
use App\Filament\Resources\PaymentMethodResource\RelationManagers;
use App\Models\PaymentMethod;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentMethodResource extends Resource
{
    protected static ?string $model = PaymentMethod::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Dons';
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    public static function getNavigationLabel(): string
    {
        return 'Methodes de Payement';
    }

    public static function getModelLabel(): string
    {
        return 'Methodes de Payement';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Methodes de Payement';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contenu Principal')
                    ->collapsible()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2)
                            ->label('Service'),

                        TextInput::make('provider')
                            ->required()
                            ->maxLength(255)
                            ->label('Fournisseur')
                            ->columnSpan(1),
                        TextInput::make('details')
                            ->required()
                            ->maxLength(255)
                            ->label('Details de Paiement')
                            ->columnSpan(1),
                    ])
                    ->columns(3),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Methode'),
                TextColumn::make('provider')->label('Fournisseur'),
                TextColumn::make('details')->label('Details'),
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
            'index' => Pages\ListPaymentMethods::route('/'),
            'create' => Pages\CreatePaymentMethod::route('/create'),
            'edit' => Pages\EditPaymentMethod::route('/{record}/edit'),
        ];
    }
}
