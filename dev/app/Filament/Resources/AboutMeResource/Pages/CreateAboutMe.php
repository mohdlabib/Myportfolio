<?php

namespace App\Filament\Resources\AboutMeResource\Pages;

use App\Filament\Resources\AboutMeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutMe extends CreateRecord
{
    protected static string $resource = AboutMeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
