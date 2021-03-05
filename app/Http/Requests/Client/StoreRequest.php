<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
        'identidad'=>'integer|required|unique:clients|max:13',
        'nombre'=>'string|required|max:255',
        'apellido'=>'string|required|max:255',
        'rtn'=>'integer|unique:clients|max:14',
        'cumpleaños'=>'date|required',
        'telefono'=>'integer|unique:clients',
        'direccion'=>'string|max:255',
        'correo'=>'string|unique:clients|max:255|email:rfc,dns',
        'puntos'=>'integer',
        ];
    }


    public function messages()
    {
        'identidad.integer'=>'Este campo debe ser tipo integer',
        'identidad.required'=>'Este campo es requerido',
        'identidad.unique'=>'Este campo ya existe.',
        'identidad.max'=>'Este campo solo acepta 13 caracteres',

        'nombre.string'=>'Este campo debe ser tipo string',
        'nombre.required'=>'Este campo es requerido',
        'nombre.max'=>'Este campo solo acepta 255 caracteres',

        'apellido.string'=>'Este campo debe ser tipo string',
        'apellido.required'=>'Este campo es requerido',
        'apellido.max'=>'Este campo solo 255 acepta caracteres',

        'rtn.integer'=>'Este campo debe ser tipo integer',
        'rtn.unique'=>'Este campo ya existe.',
        'rtn.max'=>'Este campo solo acepta 14 caracteres',

        'cumpleaños.date'=>'Este campo debe ser tipo date',
        'cumpleaños.required'=>'Este campo es requerido',

        'telefono.integer'=>'Este campo debe ser tipo integer',
        'telefono.unique'=>'Este campo ya existe.',

        'direccion.string'=>'Este campo debe ser tipo string',
        'direccion.max'=>'Este campo solo acepta 255 caracteres',

        'correo.string'=>'Este campo debe ser tipo string',
        'correo.unique'=>'Este campo ya existe.',
        'correo.max'=>'Este campo solo acepta 255 caracteres',
        'correo.email'=>'Verificar el correo',

        'puntos.integer'=>'Este campo debe ser tipo integer',
    }
}
