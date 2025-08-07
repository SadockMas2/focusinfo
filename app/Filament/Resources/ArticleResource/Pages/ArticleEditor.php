<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class ArticleEditor extends EditRecord
{
    protected static string $resource = ArticleResource::class;
}
