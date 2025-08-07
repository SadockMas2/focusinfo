<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

    public static function getNavigationLabel(): string
    {
        return 'Paramètres';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Paramètres';
    }



    public static function getModelLabel(): string
    {
        return 'Paramètres';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Paramètres';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Paramètres du Site')
                    ->collapsible()
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Nom du site')
                            ->maxLength(255)
                            ->required()
                            ->columnSpan(4),

                        FileUpload::make('logo')
                            ->label('Logo Principale')
                            ->directory('favicon')
                            ->required()
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(2),


                        FileUpload::make('favicon')
                            ->label('Icone du Site')
                            ->directory('favicon')
                            ->required()
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(2),

                        Textarea::make('description')
                            ->label('Description')
                            ->maxLength(500)
                            ->helperText('Descrirption du Site')
                            ->columnSpanFull(),
                        TextInput::make('s_link')

                            ->label('Lien')
                            ->maxLength(255)
                            ->columnSpan(2),
                        TextInput::make('keywords')

                            ->label('Mots-clés')
                            ->maxLength(255)
                            ->columnSpan(2),
                    ])
                    ->columns(4),

                Section::make('A propos de nous')
                    ->collapsible()
                    ->schema([

                        FileUpload::make('photo_1')
                            ->label('Photo Illustation  A Propos')
                            ->directory('about')
                            ->required()
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(2),

                        FileUpload::make('photo_2')
                            ->label('Photo Illustation  A Propos 2')
                            ->directory('about')
                            ->required()
                            ->image()
                            ->imageEditor()
                            ->maxSize(2048)
                            ->columnSpan(2),

                        TextInput::make('video_url')
                            ->label('Url de la Video Youtube de Presentation')
                            ->maxLength(255)
                            ->columnSpan(4),

                        TextInput::make('counter')
                            ->label('Valeur du Compteur')
                            ->maxLength(255)
                            ->columnSpan(4),
                            

                        TextInput::make('counter_text')
                            ->label('Texte du Compteur')
                            ->maxLength(255)
                            ->columnSpan(4),

                        TextInput::make('facebook')
                            ->label('Facebook')
                            ->maxLength(255)
                            ->columnSpan(4),
                        TextInput::make('twitter')
                            ->label('Twitter')
                            ->maxLength(255)
                            ->columnSpan(4),
                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->maxLength(255)
                            ->columnSpan(4),
                        TextInput::make('youtube')
                            ->label('Youtube')
                            ->maxLength(255)
                            ->columnSpan(4),
                        TextInput::make('linkedin')
                            ->label('Linkedin')
                            ->maxLength(255)
                            ->columnSpan(4),
                        TextInput::make('contact_email')
                            ->label('Email de Contact')
                            ->maxLength(255)
                            ->columnSpan(4),
                        TextInput::make('contact_phone')
                            ->label('Numero de Contact')
                            ->maxLength(255)
                            ->columnSpan(4),

                        Textarea::make('address')
                            ->label('Adresse')
                            ->maxLength(500)
                            ->helperText('Descrirption du Site')
                            ->columnSpanFull(),

                        Textarea::make('maps')
                            ->label('Lien Google Maps')
                            ->maxLength(500)
                            ->required()
                            ->rule('url') 
                            ->helperText('Collez ici un lien Google Maps valide (iframe ou lien intégré)')
                            ->columnSpanFull(),

                    ])
                    ->columns(4),

                Section::make('Historique')
                    ->collapsible()
                    ->schema([
                        TextInput::make('history_title')
                            ->label('Historique Titre')
                            ->maxLength(255)
                            ->columnSpan(4),

                        RichEditor::make('history_content')
                            ->fileAttachmentsDirectory('settings-attachments')
                            ->label('Contenu de l\'Historique')
                            ->maxLength(3000)
                            ->helperText('Historique de l\'organisation')
                            ->columnSpanFull(),
                        RichEditor::make('visions')
                            ->fileAttachmentsDirectory('settings-attachments')
                            ->label('Visions de l\'organisation')
                            ->maxLength(3000)
                            ->helperText('Visions de l\'organisation')
                            ->columnSpanFull(),


                        RichEditor::make('missions')
                            ->required()
                            ->fileAttachmentsDirectory('settings-attachments')
                            ->label('Missions de l\'organisation')
                            ->maxLength(3000)
                            ->helperText('Missions de l\'organisation')
                            ->columnSpanFull(),

                        TextArea::make('apercu')
                            ->label('Apercu de l\'organisation')
                            // ->fileAttachmentsDirectory('settings-attachments')
                            ->maxLength(3000)
                            ->helperText('Apercu de l\'organisation')
                            ->columnSpanFull(),

                        RichEditor::make('objectifs')
                            ->fileAttachmentsDirectory('settings-attachments')
                            ->label('Objectifs de l\'organisation')
                            ->maxLength(3000)
                            ->helperText('Objectifs de l\'organisation')
                            ->columnSpanFull(),

                        RichEditor::make('objectifs_specifiques')
                            ->fileAttachmentsDirectory('settings-attachments')
                            ->label('Objectifs Specifiques de l\'organisation')
                            ->maxLength(3000)
                            ->helperText('Objectifs Specifiques de l\'organisation')
                            ->columnSpanFull(),
                    ])
                    ->columns(4),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('favicon')
                    ->size(40)->label('Icon du Site'),
                ImageColumn::make('logo')
                    ->size(40)->label('Logo du Site'),

                TextColumn::make('site_name')
                    ->searchable()
                    ->label('Titre'),
                TextColumn::make('site_url')
                    ->label('Lien'),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
