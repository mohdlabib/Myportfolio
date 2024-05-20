<?php

namespace App\Filament\Resources\ContactMeResource\Pages;

use App\Filament\Resources\ContactMeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContactMe extends CreateRecord
{
    protected static string $resource = ContactMeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
