<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\OwnedVenue;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing-page.index', [
            'title' => 'JAIA Establishment',
            'clients' => Client::all(),
        ]);
    }

    public function mediaConsulting()
    {
        $clients = Client::whereHas('segments', function ($query) {
            $query->where('name', 'Media Consulting');
        });

        $clientIn = ['Lava Bar & Kitchen', 'Pion KTV', 'Koito Batuga', 'IFY KTV', 'Padma SOC'];

        $topClients = (clone $clients)->whereIn('name', $clientIn)->limit(5)->get();
        $anotherClients = (clone $clients)->whereNotIn('name', $clientIn)->get();

        // ==== If user visit count is run (with modification) =====
        // $clients = Client::whereHas('segments', function ($query) {
        //     $query->where('name', 'Media Consulting');
        // });

        // $topClients = (clone $clients)->orderBy('visited_count', 'desc')->limit(5)->get();
        // $anotherClients = $clients->orderBy('visited_count', 'desc')->offset(5)->get();

        return view('landing-page.media-consulting', [
            'title' => 'JAIA Establishment | Media Consulting',
            'topClients' => $topClients,
            'anotherClients' => $anotherClients,
        ]);
    }

    public function businessConsulting()
    {
        $clients = Client::whereHas('segments', function ($query) {
            $query->where('name', 'Business Consulting');
        });

        return view('landing-page.business-consulting', [
            'title' => 'JAIA Establishment | Business Consulting',
            'clients' => $clients->get(),
        ]);
    }

    public function operatingTheBusiness()
    {
        $clients = Client::whereHas('segments', function ($query) {
            $query->where('name', 'Operating The Business');
        });

        return view('landing-page.operating-the-business', [
            'title' => 'JAIA Establishment | Operating The Business',
            'clients' => $clients->get(),
        ]);
    }

    public function ownedVenue(OwnedVenue $ownedVenue)
    {
        return view('landing-page.owned-venue', [
            'title' => "JAIA Establishment | $ownedVenue->name",
            'ownedVenue' => $ownedVenue,
        ]);
    }
}
