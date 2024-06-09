<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Telefono;

class ClientesController extends Controller
{
    public function index()
    {
        $telefonos = Telefono::all();
        $clientes = Clientes::all(); 
        return view('clientes.indexclientes', compact('clientes', 'telefonos'));
    }

    public function create()
    {
        $telefonos = Telefono::all();
        return view('clientes.create', compact('telefonos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'telefono' => 'required',
        ]);

        $cliente = new Clientes();
        $cliente->name = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->dni = $request->input('dni');
        $cliente->telefono = $request->input('telefono');
        $cliente->save();
    
        return redirect()->route('indexclientes')->with('success', 'Cliente creado correctamente');
    }

    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('indexclientes')->with('success', 'Cliente actualizado correctamente');
    }

    public function destroy($id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->delete();
        return redirect()->route('indexclientes')->with('success', 'Cliente eliminado correctamente');
    }
}

