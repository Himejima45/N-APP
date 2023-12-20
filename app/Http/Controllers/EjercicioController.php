<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEjercicioRequest;
use App\Models\Ejercicio;
use App\Models\PartesCuerpo;

class EjercicioController extends Controller
{
    public function index()
    {
        $ejercicios = Ejercicio::all();
        return view('ejercicio.index', compact('ejercicios'));
    }

    public function create()
    {
        $partes_cuerpo = PartesCuerpo::all();
        return view('ejercicio.store', compact('partes_cuerpo'));
    }

    public function store(StoreEjercicioRequest $request)
    {
        $validado = $request->validated();
        Ejercicio::create($validado);

        return redirect('/ejercicio');
    }

    public function show(Ejercicio $ejercicio)
    {
        // PENDIENTE (?)
        // $ejercicio = Ejercicio::find($ejercicio->id);
        // return view('ejercicio.show', compact('partes_cuerpo'));
    }

    public function edit($id)
    {
        $ejercicio = Ejercicio::find($id);

        if (isset($ejercicio)) {
            $partes_cuerpo = PartesCuerpo::all();
            return view('ejercicio.edit', compact('ejercicio', 'partes_cuerpo'));
        }

        return redirect('/ejercicio');
    }

    public function update(StoreEjercicioRequest $request, $id)
    {
        $validado = $request->validated();

        $ejercicio = Ejercicio::find($id);
        $ejercicio->update($validado);

        return redirect('/ejercicio');
    }

    public function delete($id)
    {
        if (isset($id)) {
            $ejercicio = Ejercicio::find($id);
            $ejercicio->destroy($ejercicio->id);
            return redirect('/ejercicio');
        }

        return redirect('/ejercicio');
    }
}
