<?php

namespace App\Filament\Resources\KnowledgeResource\Pages;

use App\Filament\Resources\KnowledgeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKnowledge extends CreateRecord
{
    protected static string $resource = KnowledgeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
