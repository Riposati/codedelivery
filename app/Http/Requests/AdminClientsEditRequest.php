<?php

namespace codedelivery\Http\Requests;

use codedelivery\Http\Requests\Request;

class AdminClientsEditRequest extends Request
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
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
        ];
    }

    /**
     *
     * Obtém as mensagens de validações em português
     * @return array
     *
     */
    public function messages()
    {
        return [
            /*'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'password.required' => 'O campo senha é obrigatório',*/
            'address.required' => 'O campo endereço é obrigatório',
            'city.required' => 'O campo cidade é obrigatório',
            'state.required' => 'O campo estado é obrigatório',
            'zipcode.required' => 'O campo cep é obrigatório',
            'phone.required' => 'O campo telefone é obrigatório',
            'name.min' => 'informe pelo menos 3 letras no campo nome!',
        ];
    }
}
