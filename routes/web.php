<?php

use App\Http\Controllers\LandingPage\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/media-consulting', [LandingPageController::class, 'mediaConsulting']);
Route::get('/business-consulting', [LandingPageController::class, 'businessConsulting']);
Route::get('/venue/{owned_venue:slug}', [LandingPageController::class, 'ownedVenue']);
Route::get('/operating-the-business', [LandingPageController::class, 'operatingTheBusiness']);