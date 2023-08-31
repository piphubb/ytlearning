<?php

namespace App\Http\Controllers;

use App\Models\Service;
//use http\Env\Request;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();

        return view('services', [
            'services' => $services,
        ]);
    }

    public function create()
    {
        return view('services.create');
    }

    public function list()
    {
        $services = Service::all();
        return view('services.index',[
            'services' => $services]);
    }
    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('backend.service');
    }
}
