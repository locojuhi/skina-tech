<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name' => 'required|string|min:2',
            'last_name' => 'required|string|min:2',
            'username' => 'required|min:5|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Nombre es un campo obligatorio',
            'first_name.string' => 'Nombre debe ser un campo con solo letras',
            'first_name.min' => 'Nombre debe tener minimo 2 caracteres',

            'last_name.required' => 'Apellido es un campo obligatorio',
            'last_name.string' => 'Apellido debe ser un campo con solo letras',
            'last_name.min' => 'Apellido debe tener minimo 2 caracteres',

            'username.required' => 'Username es un campo obligatorio',
            'username.min' => 'Username debe tener minimo 5 caracteres',
            'username.unique' => 'Username esta siendo usado por otro usuario',

            'password.required' => 'Contraseña es un campo obligatorio',
            'password.confirmed' => 'Los campos de contraseña deben coincidir',
            'password.min' => 'Contraseña debe tener minimo 6 caracteres',

            'password.required' => 'Repetir contraseña es un campo obligatorio',
            'password.min' => 'Repetir contraseña debe tener minimo 6 caracteres',

            'email.required' => 'Email es un campo obligatorio',
            'email.email' => 'Email debe tener un formato valido de correo',
            'email.unique' => 'Este email ya esta siendo utilizado por otro usuario',

        ];
    }
}
