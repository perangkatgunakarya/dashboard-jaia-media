<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/venue/{ownedVenue:slug}', ['OwnedVenueController::class', 'show'])->name('owned_venue.show');
