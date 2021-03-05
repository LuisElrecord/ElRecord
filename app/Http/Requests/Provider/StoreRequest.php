<?php

namespace App\Http\Requests\Provider;

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
            'nombre'=>'required|string|max:50',
            'rtn'=>'int|max:15|unique:providers',
            'contacto'=>'required|string|max:50',
            'pais'=>'string|max:255',
            'ciudad'=>'string|max:255',
            'direccion'=>'string|max:255',
            'correo'=>'required|mail|string|unique:providers',
            'telefono'=>'required|int|max:15|unique:providers',
        ];
    }

    public function messages()
    {
        'nombre.required'=>'Este campo es requerido',
        'nombre.string'=>'Este campo debe ser tipo string',
        'nombre.max'=>'Este campo solo acepta 50 caracteres',

        'rtn.int'=>'Este campo debe ser tipo int',
        'rtn.max'=>'Este campo solo acepta 15 caracteres',
        'rtn.unique'=>'Ya existe un proveedor con este RTN!',

        'contacto.required'=>'Este campo es requerido',
        'contacto.string'=>'Este campo debe ser tipo string',
        'contacto.max'=>'Este campo solo acepta 50 caracteres',

        'pais.string'=>'Este campo debe ser tipo string',
        'pais.max'=>'Este campo solo acepta 255 caracteres',

        'ciudad.string'=>'Este campo debe ser tipo string',
        'ciudad.max'=>'Este campo solo acepta 255 caracteres',

        'direccion.string'=>'Este campo debe ser tipo string',
        'direccion.max'=>'Este campo solo acepta 255 caracteres',

        'correo.required'=>'Este campo es requerido',
        'correo.mail'=>'Este campo debe tener formato de correo',
        'correo.string'=>'Este campo debe ser tipo string',
        'correo.unique'=>'Ya existe un proveedor con este correo!',

        'telefono.required'=>'Este campo es requerido',
        'telefono.int'=>'Este campo debe ser tipo int',
        'telefono.max'=>'Este campo solo acepta 15 caracteres',
        'telefono.unique'=>'Ya existe un proveedor con este numero de telefono!',

    }
}
