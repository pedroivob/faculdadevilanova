<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
            'nome' => 'required|min:4',
            'matricula' => 'required|min:3|',
            'competencia' => 'required|min:4',
            'escolaridade' => 'required|min:4'
        ];
    }
    public function messages()
    {
        return [

            'nome.required' => 'O campo nome não pode ser vazio',
            'nome.min' => 'O campo nome não pode ter menos de 4 caracteres',

            'matricula.required' => 'O campo matricula não pode ser vazio',
            'matricula.min' => 'O campo matricula não pode ter menos de 3 caracteres',
            
            'competencia.required' => 'O campo competencia não pode ser vazio',
            'competencia.min' => 'O campo competencia não pode ter menos de 4 caracteres',

            
            'escolaridade.required' => 'O campo escolaridade não pode ser vazio',
            'escolaridade.min' => 'O campo escolaridade não pode ter menos de 4 caracteres',

        ];
    }
}
