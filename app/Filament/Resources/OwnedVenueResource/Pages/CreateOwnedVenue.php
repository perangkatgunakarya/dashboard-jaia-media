<?php

namespace App\Filament\Resources\OwnedVenueResource\Pages;

use App\Filament\Resources\OwnedVenueResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOwnedVenue extends CreateRecord
{
    protected static string $resource = OwnedVenueResource::class;
}
