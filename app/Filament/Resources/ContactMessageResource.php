<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Filament\Resources\ContactMessageResource\RelationManagers;
use App\Models\ContactMessage;
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

use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Illuminate\Support\Str;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left-ellipsis';
    public static function getNavigationGroup(): ?string
    {
        return 'Messages';
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationLabel(): string
    {
        return 'Messages';
    }

    public static function getModelLabel(): string
    {
        return 'Messages';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Message';
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'secondary';
    }
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contenu Principal')
                    ->collapsible()
                    ->schema([

                        TextInput::make('email')
                            ->label('Email')
                            ->required()
                            ->maxLength(255)
                            ->readOnly(true)
                            ->columnSpan(1),
                        TextInput::make('noms')
                            ->label('Noms')
                            ->required()
                            ->maxLength(255)
                            ->readOnly(true)
                            ->columnSpan(1),


                        TextInput::make('phonenumber')
                            ->label('Téléphone')
                            ->readOnly(true)
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(1),


                        Textarea::make('message')
                            ->label('Message')
                            ->maxLength(500)
                            ->readOnly(true)
                            ->helperText('Message')
                            ->columnSpanFull(),
                    ])
                    ->columns(3),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Domaine'),
                TextColumn::make('description')
                    ->searchable()
                    ->label('Message'),
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
            'index' => Pages\ListContactMessages::route('/'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
            // 'create' => Pages\CreateContactMessage::route('/create'),
        ];
    }
}
