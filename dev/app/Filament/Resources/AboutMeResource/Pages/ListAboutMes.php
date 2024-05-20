<?php

namespace App\Filament\Resources\AboutMeResource\Pages;

use App\Filament\Resources\AboutMeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutMes extends ListRecords
{
    protected static string $resource = AboutMeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
