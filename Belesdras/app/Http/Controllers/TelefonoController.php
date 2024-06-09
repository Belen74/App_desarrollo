<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefono;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $telefonos = Telefono::all();
        return view('telefonos.indextelefonos',compact('telefonos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $telefonos = Telefono::all();
        return view('telefonos.indextelefonos',compact('telefonos'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipo_tel = $request->input('tipo_tel');
        $tipo_persona = $request->input('tipo_persona');
        $telefono = $request->input('telefono');

        $telefonos = new Telefono();

        $telefonos->tipo_tel = $tipo_tel;
        $telefonos->tipo_persona = $tipo_persona;
        $telefonos->telefono = $telefono;


        $telefonos->save();

        return redirect()->route('indextelefonos')->with('success, telefono agregado correctamente');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
