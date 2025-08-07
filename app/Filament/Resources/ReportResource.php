<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Report;
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

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    public static function getNavigationGroup(): ?string
    {
        return 'Publications';
    }
    public static function getNavigationLabel(): string
    {
        return 'Rapports';
    }

    public static function getModelLabel(): string
    {
        return 'Rapports';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Rapports';
    }
       public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contenu Principal')
                    ->collapsible()
                    ->schema([
                        FileUpload::make('image')
                            ->label('Photo Illustation du Rapport')
                            ->directory('rapports/images')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(2),

                        FileUpload::make('file')
                            ->label('Fichier du Rapport')
                            ->directory('rapports/documents')
                            ->maxSize(2048)
                            ->columnSpan(2),

                        TextInput::make('titre')
                            ->label('Titre')
                            ->maxLength(255)
                            ->columnSpan(4),
                        Textarea::make('description')
                            ->label('Description')
                            ->maxLength(500)
                            ->helperText('Descrirption du Site')
                            ->columnSpanFull(),

                    ])
                    ->columns(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->size(40)->label('Couverture'),
                // Column
                TextColumn::make('titre')
                    ->searchable()
                    ->label('Titre'),
                TextColumn::make('created_at')
                    ->label('Creation'),
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
}
