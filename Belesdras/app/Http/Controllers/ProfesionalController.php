<?php

namespace App\Http\Controllers;

use App\Models\Profesional;

use App\Models\Telefono;    

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $profesionales = Profesional::all();
        $telefonos = Telefono::all();

        return view('profesionales.index_profesionales', compact('profesionales','telefonos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesionales = Profesional::all();
        $telefonos = Telefono::all();

        return view('profesionales.index_profesionales',compact('telefonos','profesionales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        // Utiliza $request->input('nombre') en lugar de $request->input['nombre']
        $name = $request->input('nombre');
        $apellido = $request->input('apellido');
        $dni = $request->input('dni');
        $telefono = $request->input('telefono');
    
        // Crea una nueva instancia de Profesional
        $profesionales = new Profesional();
        
        // Asigna los valores a los atributos del modelo
        $profesionales->name = $name;
        $profesionales->apellido = $apellido;
        $profesionales->dni = $dni;
        $profesionales->telefono = $telefono;
        
        $profesionales->save();
    
        return redirect()->route('index_profesionales')->with('success', 'Profesional creado correctamente');
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
        $profesionales = Profesional::find($id);
        if ($profesionales) {
            return view('profesionales.edit_profesionales', compact('profesionales'));
        } else {
            // Maneja el caso en el que el profesional no se encuentra
            return redirect()->route('index_profesionales')->with('error', 'Profesional no encontrado');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profesionales = Profesional::find($id);

        if (!$profesionales) {
            // Maneja el caso en el que el profesional no se encuentra
            return redirect()->route('index_profesionales.index')->with('error', 'Profesional no encontrado');
        }
        


        $profesionales->name = $request->input('nombre');
        $profesionales->apellido = $request->input('apellido');
        $profesionales->dni = $request->input('dni');
        $profesionales->telefono = $request->input('telefono');

        $profesionales->save();
        // Redirige de vuelta a la vista de listado de profesionales
        return redirect()->route('index_profesionales');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profesionales = Profesional::find($id);
        $profesionales->delete();

        return redirect()->route('index_profesionales');

    }
}
