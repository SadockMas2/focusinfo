<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ValueResource\Pages;
use App\Filament\Resources\ValueResource\RelationManagers;
use App\Models\Value;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ValueResource extends Resource
{
    protected static ?string $model = Value::class;

    protected static ?string $navigationIcon = 'heroicon-o-check';
     public static function getNavigationGroup(): ?string
        {
          return 'A Propos de Nous';
        }
        public static function getNavigationLabel(): string
{
    return 'Valeurs';
}
   public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

public static function getModelLabel(): string
{
    return 'Valeurs';
}

public static function getPluralModelLabel(): string
{
    return 'Valeurs';
}

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Nos Valeurs')
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        TextInput::make('icon')
                            ->required()
                            ->label('Icone')
                            ->maxLength(255)
                            ->columnSpan(1),

                        Textarea::make('description')
                            ->label('Résumé')
                            ->maxLength(500)
                            ->helperText('Un court résumé pour les aperçus')
                            ->columnSpanFull(),
                    ])
                    ->columns(3),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->label('Valeurs'),
                TextColumn::make('icon')
                    ->label('Icones'),
                TextColumn::make('description')
                    ->label('Description'),
                TextColumn::make('created_at')
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
            'index' => Pages\ListValues::route('/'),
            'create' => Pages\CreateValue::route('/create'),
            'edit' => Pages\EditValue::route('/{record}/edit'),
        ];
    }
}
