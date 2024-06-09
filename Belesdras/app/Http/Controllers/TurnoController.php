<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Turno;
use App\Models\Profesional;

class TurnoController extends Controller
{
    public function index()
    {
        $turnos = Turno::with('cliente')->get();
        $clientes = Clientes::all();
        $profesionales = Profesional::all();

        // Carga la lista de clientes en el select
        $listaClientes = $clientes->map(function ($cliente) {
            return [
                'id' => $cliente->id,
                'name' => $cliente->name,
                'apellido' => $cliente->apellido,
            ];
        });

        // Carga la lista de profesionales en el select
        $listaProfesionales = $profesionales->map(function ($profesional) {
            return [
                'id' => $profesional->id,
                'name' => $profesional->name,
                'apellido' => $profesional->apellido,
            ];
        });

        return view('turnos.indexturnos', compact('turnos', 'clientes', 'profesionales', 'listaClientes', 'listaProfesionales'));
    }

    public function create()
    {
        $clientes = Clientes::all();
        $profesionales = Profesional::all();
        return view('turnos.create', compact('clientes', 'profesionales'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_clientes' => 'required',
            'id_profesionales' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'estado_pago' => 'required',
            'estado_turno' => 'required',
        ]);

        Turno::create($request->all());

        return redirect()->route('indexturnos')->with('success', 'Turno creado exitosamente.');
    }

    public function destroy($id)
    {
        $turno = Turno::findOrFail($id);
        $turno->delete();

        return redirect()->route('indexturnos')->with('success', 'Turno eliminado exitosamente.');
    }
}
