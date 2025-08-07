<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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
use Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    public static function getNavigationGroup(): ?string
    {
        return 'Publications';
    }

    public static function getNavigationLabel(): string
    {
        return 'Produits';
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getModelLabel(): string
    {
        return 'Produits';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Produits';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contenu Principal')
                    ->collapsible()
                    ->schema([
                        TextInput::make('produit')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        TextInput::make('prix')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(1),

                        RichEditor::make('description')
                            ->required()
                            ->fileAttachmentsDirectory('article-attachments')
                            ->columnSpanFull(),
                        FileUpload::make('photo')
                            ->label('Image du Produit')
                            ->directory('produits')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpanFull(),


                    ])
                    ->columns(3),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->size(40)->label('Image'),
                TextColumn::make('produit')->label('Produit'),
                TextColumn::make('prix')->label('Prix'),

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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
