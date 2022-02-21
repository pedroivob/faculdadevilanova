<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
        // dd($this->idade, $this->responsavelFinanceiro);
        return [
            'nome'          => 'required|min:3|',
            'matricula'      => 'required|min:2|numeric|unique:alunos,id',
            'cpf'          => 'required|min:11|cpf|unique:alunos,id',
            'datanascimento'          => 'required|date|before:-15 years|after:' . (date('01/01/1900')),
            'responsavelFinanceiro'  => 'required_if:maior,0'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo NOME não pode ser vazio!',
            'nome.min' => 'O campo NOME não pode ser menor que 3 caracteres!',

            'datanascimento.before' => 'O Aluno precisa ter mais de 15 anos!',
            'datanascimento.after' => 'Data de nascimento apartir de 1900!',
            'datanascimento.date' => 'Data de nascimento inválida!',
            'datanascimento.require' => 'Data de nascimento não pode ser vazio!',

            'cpf.cpf' => 'O CPF informado é inválido!',
            'cpf.min' => 'O campo CPF precisa ter pelo menos 11 caractéres!',
            'cpf.formato_cpf' => 'O campo CPF deve estar no formato "999.999.999-99" !',
            'cpf.required' => 'O campo CPF não pode ser vazio!',
            'cpf.unique' => 'CPF já cadastrado',

            'datanascimento.required' => 'O campo DATA DE NASCIMENTO não pode ser vazio!',
            'datanascimento.date_format' => 'O campo DATA DE NASCIMENTO deve estar no formato "DD/MM/AAAA !',

            'matricula.required' => 'O campo MATRICULA não pode ser vazio!',
            'matricula.min' => 'O campo MATRICULA não pode ser menor que 2! EX: 05',
            'matricula.numeric' => 'O campo MATRICULA precisa ser numerico!',

            'responsavelFinanceiro.required_if' => 'Responsável financeiro obrigatório para menor de idade'
        ];
    }

    public function prepareForValidation()
    {
        $input = $this->all();

        if (!empty($this->get('datanascimento'))) {
            $input['maior'] = ($this->calc_idade($this->get('datanascimento')) >= 18) ? 1 : 0;
        }

        $this->replace($input);
    }

    protected  function passedValidation()
    {
        if ($this->has('maior') && $this->maior) {
            $this->merge(
                ['responsavelFinanceiro' => $this->get('nome')]
            );
        }
    }

    static function calc_idade($nascimento)
    {
        $nascimento = explode('-', $nascimento); //Cria um array com os campos da data de nascimento separado por -
        $data = date('d/m/Y');
        $data = explode('/', $data); //Cria um array com os campos da data atual 
        $anos = $data[2] - $nascimento[0]; //ano atual - ano de nascimento 
        //A data $nascimento é no formato ('Y-m-d) 

        if ($nascimento[1] > $data[1]) return $anos - 1; //Se o mês de nascimento for maior que o mês atual, diminui um ano 
        if ($nascimento[1] == $data[1]) { //se o mês de nascimento for igual ao mês atual, precisamos ver os dias 
            if ($nascimento[2] <= $data[0]) {
                return $anos;
            } else {
                return $anos - 1;
            }
        }

        return $anos;
    }
}
