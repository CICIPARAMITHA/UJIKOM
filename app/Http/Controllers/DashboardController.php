<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paket;
use App\Models\Artikel;
use App\Models\Event;
use App\Models\Galeri;

class DashboardController extends Controller
{
    function index(){

        $data['paket'] = Paket::count();
        $data['artikel'] = Artikel::count();
        $data['event'] = Event::count();
        $data['galeri'] = Galeri::count();
        return view('admin.dashboard', $data);
    }
}
