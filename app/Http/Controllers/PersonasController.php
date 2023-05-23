<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $datos = Personas::all();
        return view('welcome', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("newuser");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $personas = new Personas();
        $personas->ide= $request->post('ide');
        $personas-> nombre = $request->post('nombre');
        $personas-> segNom = $request->post('segNom');
        $personas-> paterno = $request->post('paterno');
        $personas-> materno = $request->post('materno');
        $personas-> telefono = $request->post('telefono');
        $personas-> email = $request->post('email');
        $personas-> fechaNac = $request->post('fechaNac');
        $personas->save();
        return redirect()->route('personas.index')->with('success', 'Agregado con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $personas = Personas::find($id);
        return view('delete', compact('personas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $personas = Personas::find($id);
        return view('update', compact('personas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $personas = Personas::find($id);
        $personas->ide= $request->post('ide');
        $personas-> nombre = $request->post('nombre');
        $personas-> segNom = $request->post('segNom');
        $personas-> paterno = $request->post('paterno');
        $personas-> materno = $request->post('materno');
        $personas-> telefono = $request->post('telefono');
        $personas-> email = $request->post('email');
        $personas-> fechaNac = $request->post('fechaNac');
        $personas->save();
        return redirect()->route('personas.index')->with('success', 'Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $personas = Personas::find($id);
        $personas -> delete();
        return redirect()->route('personas.index')->with('success', 'Eliminado con exito!');
    }
}
