<?php

namespace App\Http\Controllers;

use App\Models\GrupoMuscular;
use App\Models\PlanPersonalizado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanesController extends Controller
{
    public function nutricional()
    {
        return view('planes.nutricional');
    }

    public function ejercicio()
    {
        $ejercicios = PlanPersonalizado::all();
        return view('planes.ejercicio', compact('ejercicios'));
    }

    public function ejercicio_personalizado()
    {
        $grupos_musculares = GrupoMuscular::all();

        return view('forms.plan_ejercicio', compact('grupos_musculares'));
    }

    public function guardar_ejercicio(Request $request)
    {
        $validacion = Validator::make($request->all(), [
            'nombre' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'objetivo' => ['required', 'numeric', 'not_in:0'],
            'grupo_muscular' => ['required', 'numeric', 'not_in:0'],
            'horario' => ['required', 'numeric', 'not_in:0']
        ], [
            'nombre.required' => 'El nombre es necesario',
            'nombre.string' => 'El nombre debe ser una oración',
            'descripcion.required' => 'La descripción es necesaria',
            'descripcion.required' => 'La descripción debe ser una oración',
            'objetivo.required' => 'El objetivo es necesario',
            'objetivo.numeric' => 'La opción seleccionada no es válida',
            'objetivo.not_in' => 'La opción seleccionada es inválida',
            'grupo_muscular.required' => 'El grupo muscular es necesario',
            'grupo_muscular.numeric' => 'La opción seleccionada no es válida',
            'grupo_muscular.not_in' => 'La opción seleccionada es inválida',
            'horario.required' => 'El horario es necesario',
            'horario.numeric' => 'La opción seleccionada no es válida',
            'horario.not_in' => 'La opción seleccionada es inválida',
        ]);

        if ($validacion->fails()) {
            return redirect('/plan-ejercicios/personalizado')->withErrors($validacion)->withInput();
        }

        PlanPersonalizado::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'objetivo' => $request['objetivo'],
            'grupo_muscular_id' => $request['grupo_muscular'],
            'horario' => $request['horario'],
        ]);

        return redirect('/plan-ejercicios/personalizado');
    }

    public function nutricional_personalizado()
    {
        return view('forms.plan_nutricional');
    }

    public function plan_entrenador()
    {
        return view('forms.entrenador_personal');
    }
}
