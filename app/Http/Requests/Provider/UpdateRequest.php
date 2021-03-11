<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'rtn'=>'string|unique:providers,rtn,'.$this->route('provider')->id.'|max:15',
            'contacto'=>'required|string|max:50',
            'pais'=>'string|max:255',
            'ciudad'=>'string|max:255',
            'direccion'=>'string|max:255',
            'correo'=>'required|email:rfc,dns|string|unique:providers,email,'.$this->route('provider')->id,
            'telefono'=>'required|string|unique:providers,telefono,'.$this->route('provider')->id.'|max:15',
        ];
    }

    public function messages()
    {
        return[
        'nombre.required'=>'Este campo es requerido',
        'nombre.string'=>'Este campo debe ser tipo string',
        'nombre.max'=>'Este campo solo acepta 50 caracteres',

        'rtn.string'=>'Este campo debe ser tipo string',
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
        'correo.email'=>'Este campo debe tener formato de correo',
        'correo.string'=>'Este campo debe ser tipo string',
        'correo.unique'=>'Ya existe un proveedor con este correo!',

        'telefono.required'=>'Este campo es requerido',
        'telefono.string'=>'Este campo debe ser tipo string',
        'telefono.max'=>'Este campo solo acepta 15 caracteres',
        'telefono.unique'=>'Ya existe un proveedor con este numero de telefono!',
    ];
    }
}
