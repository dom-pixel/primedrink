<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.string' => 'Digite um nome válido',
            'name.required'  => 'O campo nome é obrigatório',
            'email.required'=> 'O campo e-mail é obrigatório',
            'email.unique'=> 'Esse e-mail já está registrado em nosso banco de dados!',
            'email.email'=> 'Digite um e-mail válido!',
            'cell.required' => 'O campo telefone é obrigatório',
            'cell.string' => 'Digite um telefone válido',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cnpj' => 'required|string',
            'email' => 'required|email|unique:subscriptions,email',
            'cell' => 'required|string',
        ];
    }
}
