<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'clave' => 'required|string|max:191|unique:users,clave',
            'name' => 'required|string|max:191',
            'apellidoP' => 'required|string|max:191',
            'apellidoM' => 'required|string|max:191',
            'email' => 'required|min:7|email|string|max:191|unique:users',
            'password' => 'required|string|min:3',
        ];
    }
}
