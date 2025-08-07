<?php

namespace App\Filament\Resources\BenevoleResource\Pages;

use App\Filament\Resources\BenevoleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBenevoles extends ListRecords
{
    protected static string $resource = BenevoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
