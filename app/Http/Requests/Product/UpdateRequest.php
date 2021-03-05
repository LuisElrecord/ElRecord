<?php

namespace App\Http\Requests\Product;

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
             'nombre'=>'required|string|unique:products,nombre,'.$this->route('product')->id.'|max:255',
            'imagen'=>'required|dimensions:min_width=100,min_height=200',
            'precio_venta'=>'required',
            'marca'=>'required|string',
            'category_id'=>'integer|required|exists:App\Models\Category,id',
            'provider_id'=>'integer|required|exists:App\Models\Provider,id',
        ];
    }


     public function messages()
    {
        'nombre.required'=>'Este campo es requerido',
        'nombre.string'=>'Este campo debe ser tipo string',
        'nombre.max'=>'Este campo solo acepta 255 caracteres',
        'nombre.unique'=>'Ya existe un producto con este nombre!',

        'imagen.required'=>'Este campo es requerido',
        'imagen.dimensions'=>'La imagen debe ser de 100x200',

        'precio_venta.required'=>'Este campo es requerido',

        'marca.required'=>'Este campo es requerido',
        'marca.string'=>'Este campo debe ser tipo string',

        'category_id.integer'=>'Este campo debe ser integer',
        'category_id.required'=>'Este campo es requerido',
        'category_id.exists'=>'Esa categoria no existe',

        'provider_id.integer'=>'Este campo debe ser integer',
        'provider_id.required'=>'Este campo es requerido',
        'provider_id.exists'=>'Esa proveedor no existe',
    }
}
