<?php

namespace App\Http\Controllers;

use App\Models\TypeActivity;
use Illuminate\Http\Request;

class TypeActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
     {
     $type_activities = TypeActivity::all();
        return view('type_activity.index', compact('type_activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request);
      $typeActivity = TypeActivity::create($request->all());
      session()->flash('message', 'Tipo de actividad creado exitosamente');
      return redirect()->route('type_activity.index');
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
         $typeActivity = TypeActivity::find($id);
        if($typeActivity)//La causal existe
        {
            return view('type_activity.edit', compact('typeActivity'));
        }
        else
        {
            session()->flash('warning', 'No se encuentra el tipo de actividad solicitado');
            return redirect()->route('type_activity.index');
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
