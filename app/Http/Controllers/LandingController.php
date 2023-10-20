<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paket;
use App\Models\Artikel;
use App\Models\Event;
use App\Models\Galeri;

class LandingController extends Controller
{
    function home(){
        $data['paket'] = Paket::all();
        $data['artikel'] = Artikel::all();
        $data['event'] = Event::all();
        $data['galeri'] = Galeri::all();
        return view('landing.base', $data);
    }
}
