<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        return view('services',[
            'services' => $services
        ]);
    }
}
