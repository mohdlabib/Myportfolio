<?php

namespace App\Filament\Resources\KnowledgeResource\Pages;

use App\Filament\Resources\KnowledgeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKnowledges extends ListRecords
{
    protected static string $resource = KnowledgeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
