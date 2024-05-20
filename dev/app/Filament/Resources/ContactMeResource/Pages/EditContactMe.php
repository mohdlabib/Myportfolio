<?php

namespace App\Filament\Resources\ContactMeResource\Pages;

use App\Filament\Resources\ContactMeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditContactMe extends EditRecord
{
    protected static string $resource = ContactMeResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
