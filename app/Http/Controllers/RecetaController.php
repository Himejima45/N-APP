<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecetaRequest;
use App\Models\Comida;
use App\Models\Nutricional;
use App\Models\Receta;
use App\Models\Tipo;

class RecetaController extends Controller
{
    public function index()
    {
        $recetas = Receta::all();

        return view('receta.index', compact('recetas'));
    }

    public function create()
    {
        $tipos = Tipo::all();
        $comidas = Comida::all();
        $alimentos = Nutricional::all();

        return view('receta.create', compact('tipos', 'comidas', 'alimentos'));
    }

    public function store(StoreRecetaRequest $request)
    {
        $validado = $request->validated();
        $receta = Receta::create($validado);
        $receta->alimentos()->sync($request['alimento']);

        return redirect('/receta');
    }

    public function show(Receta $receta)
    {
        //
    }

    public function edit($id)
    {
        $tipos = Tipo::all();
        $comidas = Comida::all();
        $alimentos = Nutricional::all();
        $receta = Receta::find($id);
        return view('receta.edit', compact('receta', 'tipos', 'comidas', 'alimentos'));
    }

    public function update(StoreRecetaRequest $request, $id)
    {
        $validado = $request->validated();

        $receta = Receta::find($id);
        $receta->update($validado);
        $receta->alimentos()->sync($request['alimento']);

        return redirect('/receta');
    }

    public function delete($id)
    {
        if (isset($id)) {
            $receta = Receta::find($id);
            $receta->destroy($receta->id);
            return redirect('/receta');
        }

        return redirect('/receta');
    }
}
