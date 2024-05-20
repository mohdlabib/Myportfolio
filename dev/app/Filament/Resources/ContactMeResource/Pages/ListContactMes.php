<?php

namespace App\Filament\Resources\ContactMeResource\Pages;

use App\Filament\Resources\ContactMeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactMes extends ListRecords
{
    protected static string $resource = ContactMeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
