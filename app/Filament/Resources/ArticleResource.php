<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;


use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
     public static function getNavigationGroup(): ?string
    {
        return 'Publications';
    }

    public static function getNavigationLabel(): string
    {
        return 'Articles';
    }

    public static function getModelLabel(): string
    {
        return 'Article';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Articles';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contenu Principal')
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, $set) {
                                $set('slug', Str::slug($state));
                            })
                            ->columnSpan(2),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->columnSpan(1),

                        RichEditor::make('content')
                            ->required()
                            ->fileAttachmentsDirectory('article-attachments')
                            ->columnSpanFull(),

                        Textarea::make('excerpt')
                            ->label('Résumé')
                            ->maxLength(500)
                            ->helperText('Un court résumé pour les aperçus')
                            ->columnSpanFull(),
                    ])
                    ->columns(3),

                Section::make('Métadonnées')
                    ->collapsible()
                    ->schema([
                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required()
                            ->preload()
                            ->searchable()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                ColorPicker::make('color')
                                    ->default('#3b82f6'),
                            ]),

                        Select::make('author_id')
                            ->relationship('author', 'name')
                            ->default(auth()->id())
                            ->required()
                            ->searchable()
                            ->preload(),

                        FileUpload::make('featured_image')
                            ->label('Image Principale')
                            ->directory('articles/featured-images')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(1),


                        DateTimePicker::make('published_at')
                            ->label('Date de Publication')
                            ->displayFormat('d/m/Y H:i')
                            ->timezone('Europe/Paris'),

                        Select::make('status')
                            ->options([
                                'draft' => 'Brouillon',
                                'published' => 'Publié',
                                'archived' => 'Archivé',
                            ])
                            ->required()
                            ->default('draft'),
                    ])
                    ->columns(2),

                Section::make('Options Avancées')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        TextInput::make('reading_time')
                            ->label('Temps de Lecture (minutes)')
                            ->numeric()
                            ->helperText('Laisser vide pour calcul automatique'),

                        TagsInput::make('tags')
                            ->separator(','),

                        ColorPicker::make('color')
                            ->label('Couleur du Thème')
                            ->default('#3b82f6'),

                        Checkbox::make('featured')
                            ->label('Article Mis en Avant'),

                        Textarea::make('seo_meta.description')
                            ->label('Meta Description SEO')
                            ->maxLength(160)
                            ->helperText('160 caractères max'),
                    ])
                    ->columns(2),
            ]);
    }



    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    // ->url('storage'/)
                    ->size(40)->label('Image'),

                TextColumn::make('title')
                    ->searchable()
                    ->label('Articles'),
                TextColumn::make('view_count')
                    ->label('Lectures'),
                TextColumn::make('created_at')
                    ->label('Publication'),
                TextColumn::make('status')
                    ->label('Status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }



    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }



    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
            'editor' => Pages\ArticleEditor::route('/{record}/editor'), // Éditeur avancé
        ];
    }


}
