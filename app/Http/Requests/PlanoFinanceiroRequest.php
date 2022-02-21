<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PlanoFinanceiroRequest extends FormRequest
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
            'nome' => 'required|string|max:45',
            'desconto' => 'required|numeric|min:0|max:100',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome deve ser preenchido',
            'nome.string' => 'O campo Nome deve conter apenas texto',
            'nome.max' => 'O campo Nome não deve exceder 45 caracteres',

            'desconto.required' => 'O campo Desconto é obrigatório',
            'desconto.numeric' => 'O campo Desconto deve conter apenas números',
            'desconto.min' => 'O campo Desconto não pode ser menor que 0',
            'desconto.max' => 'O campo Desconto não pode ser maior que 100',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}
