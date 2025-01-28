<?php

namespace App\Filament\Resources\OwnedVenueResource\Pages;

use App\Filament\Resources\OwnedVenueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOwnedVenues extends ListRecords
{
    protected static string $resource = OwnedVenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
