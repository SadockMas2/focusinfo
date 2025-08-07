<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BenevoleResource\Pages;
use App\Filament\Resources\BenevoleResource\RelationManagers;
use App\Models\Benevole;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BenevoleResource extends Resource
{
    protected static ?string $model = Benevole::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
       public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationGroup(): ?string
    {
        return 'A Propos de Nous';
    }

    public static function getNavigationLabel(): string
    {
        return 'Equipe';
    }

    public static function getModelLabel(): string
    {
        return 'Equipe';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Equipe';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contenu Principal')
                    ->collapsible()
                    ->schema([
                        TextInput::make('noms')
                            ->required()
                            ->label('Noms')
                            ->maxLength(255)
                            ->columnSpan(2),
                        TextInput::make('fonction')
                            ->required()
                            ->label('Fonction')
                            ->maxLength(255)
                            ->columnSpan(2),
                        TextInput::make('facebook')
                            ->required()
                            ->label('Facebook')
                            ->maxLength(255)
                            ->columnSpan(2),

                        TextInput::make('twitter')
                            ->required()
                            ->label('Twitter')
                            ->maxLength(255)
                            ->columnSpan(2),
                        TextInput::make('instagram')
                            ->required()
                            ->label('Instagram')
                            ->maxLength(255)
                            ->columnSpan(2),
                        Select::make('status')
                            ->options([
                                'inactive' => 'Inactif',
                                'active' => 'Actif',
                            ])
                            ->required()
                            ->columnSpan(2)
                            ->default('inactive'),

                        FileUpload::make('photo')
                            ->label('Photo')
                            ->directory('benevoles/profiles')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(4),





                    ])
                    ->columns(4),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->size(40)->label('Photo'),

                TextColumn::make('noms')
                    ->label('Bénévole'),
                TextColumn::make('fonction')
                    ->label('Fonction'),
                TextColumn::make('facebook')
                    ->label('Facebook'),
                TextColumn::make('instagram')
                    ->label('Instagram'),
                TextColumn::make('twitter')
                    ->label('Twitter'),
                TextColumn::make('status')
                    ->label('Status'),

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
            'index' => Pages\ListBenevoles::route('/'),
            'create' => Pages\CreateBenevole::route('/create'),
            'edit' => Pages\EditBenevole::route('/{record}/edit'),
        ];
    }
}
