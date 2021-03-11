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
            'rtn'=>'max:16|unique:providers',
            'contacto'=>'required|string|max:50',
            'pais'=>'max:255',
            'ciudad'=>'max:255',
            'direccion'=>'max:255',
            'correo'=>'required|email:rfc,dns',
            'telefono'=>'required|max:15',
        ];
    }

    public function messages()
    {
            return[
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'Este campo debe ser tipo string',
            'nombre.max'=>'Este campo solo acepta 50 caracteres',

            'rtn.max'=>'Este campo solo acepta 15 caracteres',
            'rtn.unique'=>'Este RTN coincide con otro',

            'contacto.required'=>'Este campo es requerido',
            'contacto.string'=>'Este campo debe ser tipo string',
            'contacto.max'=>'Este campo solo acepta 50 caracteres',

            'pais.max'=>'Este campo solo acepta 255 caracteres',

            'ciudad.max'=>'Este campo solo acepta 255 caracteres',

            'direccion.max'=>'Este campo solo acepta 255 caracteres',

            'correo.required'=>'Este campo es requerido',
            'correo.email'=>'Este campo debe tener formato de correo',

            'telefono.required'=>'Este campo es requerido',
            'telefono.max'=>'Este campo solo acepta 15 caracteres',
        ];
    }
}
