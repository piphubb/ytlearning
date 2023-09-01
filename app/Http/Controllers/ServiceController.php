<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceResquest;
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

    public function index()
    {
        $services = Service::all();
        return view('services.index', [
            'services' => $services]);
    }

    public function store(ServiceResquest $request)
    {
        if($request->validated()){
            Service::create($request->all());
            return redirect()->route('services.index');
        }else{
            return redirect()->route('services.create');
        }
    }
    public function edit($id){
        $services = Service::find($id);
        return view('services.edit',[
            'services'=>$services
        ]);
    }
    public function update(ServiceResquest $request, $id){
        if($request->validated()) {
            $services = Service::find($id);
            $services->update($request->all());
            return redirect()->route('services.index');
        }else{
            return redirect()->route('services.edit',$id);
        }
    }
    public function destroy($id){
        $services = Service::find($id);
        $services->delete();
        return redirect()->route('services.index');
    }
    public function show($id){
        $services = Service::find($id);
        return view('services.show',[
            'services'=> $services
        ]);
    }
}
