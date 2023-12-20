<?php

namespace App\Http\Requests;

use App\Models\PartesCuerpo;
use Illuminate\Foundation\Http\FormRequest;

class StoreEjercicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $partes_cuerpo = PartesCuerpo::count();

        return [
            'nombre' => ['required', 'string'],
            'genero' => ['required', 'numeric', 'between:1,2'],
            'partes_cuerpos_id' => ['required', 'numeric', 'not_in:0', 'max:' . $partes_cuerpo],
        ];
    }


    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es necesario',
            'nombre.string' => 'El nombre debe ser una oración',
            'genero.required' => 'El género es necesario',
            'genero.not_in' => 'La opción seleccionada es inválida',
            'genero.between' => 'La opción seleccionada no se encuentra disponible',
            'genero.numeric' => 'La opción seleccionada debe ser válida',
            'partes_cuerpos_id.required' => 'El campo es necesario',
            'partes_cuerpos_id.numeric' => 'La opción seleccionada debe ser válida',
            'partes_cuerpos_id.not_in' => 'La opción seleccionada es inválida',
            'partes_cuerpos_id.max' => 'La opción seleccionada no se encuentra disponible',
        ];
    }
}
