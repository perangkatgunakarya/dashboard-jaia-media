<?php

namespace App\Observers;

use App\Models\Client;
use Illuminate\Support\Facades\Storage;

class ClientObserver
{
    /**
     * Handle the Client "created" event.
     */
    public function created(Client $client): void
    {
        //
    }

    /**
     * Handle the Client "updated" event.
     */
    public function updated(Client $client): void
    {
        if ($client->getOriginal('logo_url') !== $client->logo_url) {
            Storage::disk('public')->delete($client->getOriginal('logo_url'));
        }

        if ($client->getOriginal('background_url') !== $client->background_url) {
            Storage::disk('public')->delete($client->getOriginal('background_url'));
        }
    }

    /**
     * Handle the Client "deleting" event.
     */
    public function deleting(Client $client): void
    {
        Storage::disk('public')->delete($client->logo_url);
        Storage::disk('public')->delete($client->background_url);
    }

    /**
     * Handle the Client "deleted" event.
     */
    public function deleted(Client $client): void
    {
        //
    }

    /**
     * Handle the Client "restored" event.
     */
    public function restored(Client $client): void
    {
        //
    }

    /**
     * Handle the Client "force deleted" event.
     */
    public function forceDeleted(Client $client): void
    {
        //
    }
}
