<?php

namespace App\Filament\Resources\BenevoleResource\Pages;

use App\Filament\Resources\BenevoleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBenevole extends EditRecord
{
    protected static string $resource = BenevoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
