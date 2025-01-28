<?php

namespace App\Filament\Resources\OwnedVenueResource\Pages;

use App\Filament\Resources\OwnedVenueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOwnedVenue extends EditRecord
{
    protected static string $resource = OwnedVenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
