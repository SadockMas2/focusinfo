<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DomainResource\Pages;
use App\Filament\Resources\DomainResource\RelationManagers;
use App\Models\Domain;
use Filament\Forms\Components\RichEditor;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DomainResource extends Resource
{
    protected static ?string $model = Domain::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Publications';
    }

    public static function getNavigationLabel(): string
    {
        return 'Domaines d\'Intervention';
    }

    public static function getModelLabel(): string
    {
        return 'Domaines d\'Intervention';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Domaines d\'Intervention';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contenu Principal')
                    ->collapsible()
                    ->schema([

                        FileUpload::make('image')
                            ->label('Image du domaine')
                            ->directory('domaines')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(3),

                        TextInput::make('name')
                            ->label('Domaines')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(3),

                        Textarea::make('description')
                            ->label('Description')
                            ->maxLength(500)
                            ->helperText('Description')
                            ->columnSpanFull(),
                             RichEditor::make('long_desc')
                            ->required()
                            ->fileAttachmentsDirectory('domaines-details')
                            ->columnSpanFull(),
                    ])
                    ->columns(3),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    // ->url('storage'/)
                    ->size(40)->label('Image'),
                TextColumn::make('name')
                    ->searchable()
                    ->label('Domaines'),
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
            'index' => Pages\ListDomains::route('/'),
            'create' => Pages\CreateDomain::route('/create'),
            'edit' => Pages\EditDomain::route('/{record}/edit'),
        ];
    }
}
