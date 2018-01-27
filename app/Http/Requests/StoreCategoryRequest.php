<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'parent_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre es un campo obligatorio',
            'name.min' => 'Nombre debe tener minimo 4 caracteres',
            'parent_id.required' => 'Categoria padre debe es un campo obligatorio',
            'parent_id.numeric' => 'Categoria padre debe ser numerico',
            
        ];
    }
}
