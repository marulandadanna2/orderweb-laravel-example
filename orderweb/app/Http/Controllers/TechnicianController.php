<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $technicans = Technician::all();
        return view('technician.index', compact('technicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('technician.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request);
      $technician = Technician::create($request->all());
      session()->flash('message', 'Tecnico creado exitosamente');
      return redirect()->route('technician.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $technician = Technician::find($id);
        if($technician)//La causal existe
        {
            return view('technician.edit', compact('technician'));
        }
        else

        {
            session()->flash('warning', 'No se encuentra el tipo de actividad solicitado');
            return redirect()->route('technician.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeActivity = TypeActivity::find($id);
        if($typeActivity)//El tipo de actividad existe
        {
           $typeActivity->update($request->all());
           session()->flash('message','Tipo de actividad actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el tipo de actividad solicitado');
        }
        return redirect()->route('type_activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typeActivity = TypeActivity::find($id);
        if($typeActivity)//El tipo de catividad existe
        {
            $typeActivity->delete();
            session()->flash('message', 'Tipo de actividad eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el tipo de actividad solicitado');
            
        }
        return redirect()->route('type_activity.index');
    }
}
