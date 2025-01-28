<?php

namespace App\Observers;

use App\Models\OwnedVenue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OwnedVenueObserver
{
    /**
     * Handle the OwnedVenue "creating" event.
     */
    public function creating(OwnedVenue $ownedVenue): void
    {
        $ownedVenue->slug = Str::slug($ownedVenue->name);
    }

    /**
     * Handle the OwnedVenue "created" event.
     */
    public function created(OwnedVenue $ownedVenue): void {}

    /**
     * Handle the OwnedVenue "updating" event.
     */
    public function updating(OwnedVenue $ownedVenue): void
    {
        if ($ownedVenue->getOriginal('logo_url') !== $ownedVenue->logo_url) {
            Storage::disk('public')->delete($ownedVenue->getOriginal('logo_url'));
        }

        if ($ownedVenue->getOriginal('jumbotron_url') !== $ownedVenue->jumbotron_url) {
            Storage::disk('public')->delete($ownedVenue->getOriginal('jumbotron_url'));
        }

        if ($ownedVenue->getOriginal('overview_image_url') !== $ownedVenue->overview_image_url) {
            Storage::disk('public')->delete($ownedVenue->getOriginal('overview_image_url'));
        }

        $galleriesToDelete = array_diff($ownedVenue->getOriginal('galleries'), $ownedVenue->galleries);
        
        foreach ($galleriesToDelete as $galleryToDelete ) {
            Storage::disk('public')->delete($galleryToDelete);
        }
    }

    /**
     * Handle the OwnedVenue "updated" event.
     */
    public function updated(OwnedVenue $ownedVenue): void
    {
        //
    }

    /**
     * Handle the OwnedVenue "deleting" event.
     */
    public function deleting(OwnedVenue $ownedVenue): void
    {
        Storage::disk('public')->delete($ownedVenue->logo_url);
        Storage::disk('public')->delete($ownedVenue->jumbotron_url);
        Storage::disk('public')->delete($ownedVenue->overview_image_url);

        foreach ($ownedVenue->galleries as $gallery ) {
            Storage::disk('public')->delete($gallery);
        }
    }

    /**
     * Handle the OwnedVenue "deleted" event.
     */
    public function deleted(OwnedVenue $ownedVenue): void
    {
        //
    }

    /**
     * Handle the OwnedVenue "restored" event.
     */
    public function restored(OwnedVenue $ownedVenue): void
    {
        //
    }

    /**
     * Handle the OwnedVenue "force deleted" event.
     */
    public function forceDeleted(OwnedVenue $ownedVenue): void
    {
        //
    }
}
