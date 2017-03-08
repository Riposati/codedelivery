<?php

namespace codedelivery\Http\Requests;

use codedelivery\Http\Requests\Request;

class DeliverymenRequest extends Request
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
            'name' => 'required',
            'email' =>'required',
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
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'name.min' => 'informe pelo menos 3 letras no campo nome!',
        ];
    }
}
