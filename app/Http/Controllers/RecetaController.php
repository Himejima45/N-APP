<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use App\Models\PlanReceta;
use App\Models\Receta;
use App\Models\Tipo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = PlanReceta::all();
        return view('receta.receta', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        $comidas = Comida::all();
        $recetas = Receta::all();

        return view('receta.crear', compact('tipos', 'comidas', 'recetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipos = Tipo::all()->count();
        $comidas = Comida::all()->count();
        $recetas = Receta::all()->count();

        $validacion = Validator::make($request->all(), [
            'nombre' => ['required', 'string'],
            'tipos' => ['required', 'numeric', 'not_in:0', 'max:' . $tipos],
            'comidas' => ['required', 'numeric', 'not_in:0', 'max:' . $comidas],
            'recetas' => ['required', 'numeric', 'not_in:0', 'max:' . $recetas],
        ], [
            'nombre.required' => 'El nombre es necesario',
            'nombre.string' => 'El nombre debe ser una oración',
            'tipos.required' => 'El tipo es necesario',
            'tipos.not_in' => 'La opción seleccionada es inválido',
            'tipos.max' => 'La opción seleccionada no se encuentra disponible',
            'tipos.numeric' => 'La opción seleccionada debe ser válida',
            'comidas.required' => 'El tipo es necesario',
            'comidas.not_in' => 'La opción seleccionada es inválido',
            'comidas.max' => 'La opción seleccionada no se encuentra disponible',
            'comidas.numeric' => 'La opción seleccionada debe ser válida',
            'recetas.required' => 'El tipo es necesario',
            'recetas.not_in' => 'La opción seleccionada es inválido',
            'recetas.max' => 'La opción seleccionada no se encuentra disponible',
            'recetas.numeric' => 'La opción seleccionada debe ser válida',
        ]);

        if ($validacion->fails()) {
            return redirect('crear-receta')->withErrors($validacion)->withInput();
        }

        PlanReceta::create([
            'nombre' => $request['nombre'],
            'tipo_id' => $request['tipos'],
            'comida_id' => $request['comidas'],
            'receta_id' => $request['recetas'],
        ]);

        return redirect('/receta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
