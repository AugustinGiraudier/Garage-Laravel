<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevehiculeRequest;
use App\Http\Requests\UpdatevehiculeRequest;
use App\Http\Requests\insertVehiculeRequest;
use App\Models\vehicule;
use App\Models\type;
use Illuminate\Support\Facades\Auth;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect('/login');
        }

        $vehicules = vehicule::all();
        $types = [];
        
        foreach($vehicules as $vehicule){
            array_push($types, $vehicule->type->name);
        }
        $nbVehicules = count($types);

        return view('vehicules', compact('vehicules', 'types', 'nbVehicules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect('/login');
        }

        $types = type::all();
        return view('createVehicule', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\insertVehiculeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(insertVehiculeRequest $request)
    {
        $vehicule = vehicule::create($request->all());
        return redirect("/vehicules/".$vehicule->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show(vehicule $vehicule)
    {
        $vehicule->get();
        $type = $vehicule->type;
        $tasks = $vehicule->tasks;
        return view('vehicule',compact('vehicule','type', 'tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicule $vehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevehiculeRequest  $request
     * @param  \App\Models\vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevehiculeRequest $request, vehicule $vehicule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicule $vehicule)
    {
        $vehicule->delete();
        return back();
    }
}
