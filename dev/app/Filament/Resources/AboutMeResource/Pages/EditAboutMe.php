<?php

namespace App\Filament\Resources\AboutMeResource\Pages;

use App\Filament\Resources\AboutMeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutMe extends EditRecord
{
    protected static string $resource = AboutMeResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
