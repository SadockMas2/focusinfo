<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';
    

    public static function getNavigationLabel(): string
{
    return 'Catégories';
}
 public static function getNavigationGroup(): ?string
    {
        return 'Publications';
    }

public static function getModelLabel(): string
{
    return 'Catégorie';
}

public static function getPluralModelLabel(): string
{
    return 'Catégories';
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
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, $set) {
                                $set('category_id', Str::slug($state));
                            })
                            ->columnSpan(2),

                        TextInput::make('category_id')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
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
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Catégories'),
                TextColumn::make('category_id')
                    ->label('Slug'),
                TextColumn::make('created_at')
                    ->label('Création'),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                // EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            // 'edit' => Pages\EditCategory::route('/{record}/edit'),
            // 'editor' => Pages\EditCategory::route('/{record}/editor'), // Éditeur avancé
        ];
    }
}
