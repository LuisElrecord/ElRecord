<?php

namespace App\Http\Requests\Category;

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
            'section_id'=>'integer|required',
        ];
    }


    public function messages()
    {
        'nombre.required'=>'Este campo es requerido',
        'nombre.string'=>'Este campo debe ser tipo string',
        'nombre.max'=>'Este campo solo acepta 50 carateres',

        'section_id.integer'=>'Este campo debe ser un integer',
        'section_id.required'=>'Este campo es requerido',
    }
}
