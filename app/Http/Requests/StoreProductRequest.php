<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:4',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required',
        ];   
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre es un campo obligatorio',
            'name.min' => 'Nombre debe tener minimo 4 caracteres',
            'category_id.required' => 'Categoria es un campo obligatorio',
            'category_id.numeric' => 'Categoria debe ser numerico',
            
        ];
    }
}
