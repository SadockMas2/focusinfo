<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Filament\Resources\SlideResource\RelationManagers;
use App\Models\Slide;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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
use Illuminate\Support\Str;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    public static function getNavigationGroup(): ?string
    {
        return 'Publications';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contenu Principal')
                    ->collapsible()
                    ->schema([
                        TextInput::make('s_titre')
                            ->required()
                            ->label('Titre')
                            ->maxLength(255)
                            ->columnSpan(4),

                        FileUpload::make('s_image')
                            ->label('Image Principale')
                            ->directory('slides/foreground')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(2),


                        FileUpload::make('s_bg_image')
                            ->label('Image d\'arrière-plan')
                            ->directory('slides/background')
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(2),

                        Textarea::make('s_desc')
                            ->label('Description')
                            ->maxLength(500)
                            ->helperText('Un court résumé pour les aperçus')
                            ->columnSpanFull(),
                        TextInput::make('s_link')
                            ->required()
                            ->label('Lien')
                            ->maxLength(255)
                            ->columnSpan(2),
                        TextInput::make('s_linkText')
                            ->required()
                            ->label('Texte du Lien')
                            ->maxLength(255)
                            ->columnSpan(2),
                        Select::make('s_status')
                            ->options([
                                'masqued' => 'Brouillon',
                                'active' => 'Publié',
                            ])
                            ->required()
                            ->columnSpan(4)
                            ->default('active'),
                    ])
                    ->columns(4),

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
                ImageColumn::make('s_image')
                    ->size(40)->label('Image Principale'),
                ImageColumn::make('s_bg_image')
                    ->size(40)->label('Image d\'arrière-plan'),

                TextColumn::make('s_titre')
                    ->searchable()
                    ->label('Titre'),
                TextColumn::make('s_link')
                    ->label('Lien'),
                TextColumn::make('s_linkText')
                    ->label('Texte du Lien'),
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
}
