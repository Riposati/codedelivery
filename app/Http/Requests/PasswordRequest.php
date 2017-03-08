<?php

namespace codedelivery\Http\Requests;

use codedelivery\Http\Requests\Request;

class PasswordRequest extends Request
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
            'password' => 'required',
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

            'password.required' => 'O campo senha é obrigatório',
        ];
    }
}
