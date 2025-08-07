<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CounterResource\Pages;
use App\Filament\Resources\CounterResource\RelationManagers;
use App\Models\Counter;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CounterResource extends Resource
{
    protected static ?string $model = Counter::class;

    protected static ?string $navigationIcon = 'heroicon-o-numbered-list';
    public static function getNavigationGroup(): ?string
    {
        return 'Publications';
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationLabel(): string
    {
        return 'Compteurs';
    }

    public static function getModelLabel(): string
    {
        return 'Compteur';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Compteurs';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Compteurs')
                    ->collapsible()
                    ->schema([
                        TextInput::make('name')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        TextInput::make('value')
                            ->label('Valeur')
                            ->maxLength(255)
                            ->columnSpan(2),
                        IconPicker::make('icon')
                            ->label('Icône')
                            ->sets([
                                'heroicons-outline',
                                'heroicons-solid',
                                'lucide',
                                'tabler',
                                'phosphor',
                            ])

                            ->columns(6)
                            ->columnSpan(2),
                        ColorPicker::make('color')
                            ->label('Couleur')
                            ->columnSpan(2),
                    ])
                    ->columns(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('name')
                    ->searchable()
                    ->label('Titre'),
                TextColumn::make('value')
                    ->searchable()
                    ->label('Valeur'),
                TextColumn::make('icon')
                    ->searchable()
                    ->label('Icône'),
                TextColumn::make('color')
                    ->searchable()
                    ->label('Couleur'),

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
            'index' => Pages\ListCounters::route('/'),
            'create' => Pages\CreateCounter::route('/create'),
            'edit' => Pages\EditCounter::route('/{record}/edit'),
        ];
    }
}
