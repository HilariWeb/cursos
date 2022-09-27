<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('inscripcion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('inscripcion.registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$datosDistrital = request()->all();
        //return response()->json($datosDistrital);


        $validatedData = $request->validate([
            'email' => 'required|unique:inscripcions|max:255',
        ]);

        $inscripcion = new Inscripcion();

        $inscripcion->nombre_completo = $request->nombre_completo;
        $inscripcion->celular = $request->celular;
        $inscripcion->email = $request->email;
        $inscripcion->pais = $request->pais;
        $inscripcion->institucion = $request->institucion;
        $inscripcion->grado_formacion = $request->grado_formacion;
        $inscripcion->estado = "1";

        $inscripcion->save();
        return view ('inscripcion.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function show(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscripcion $inscripcion)
    {
        //
    }
}
