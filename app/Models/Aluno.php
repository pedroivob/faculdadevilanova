<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Curso, PlanoFinanceiro};

class Aluno extends Model
{
    use HasFactory;
    protected $table = "alunos";
    protected $fillable = ['nome', 'matricula', 'cpf', 'datanascimento', 'responsavelFinanceiro', 'idcursos', 'idplano'];
    

    public function _curso(){


        $cursos = Curso::all();

        if($this->idcursos>0)
       { foreach($cursos as $curso)
        {
            if ($this->idcursos == $curso->id) 
            
            {
                return  $curso->nomedocurso;
            }


        }
    }


        else return "Sem curso";
    }
    
    public function _plano(){


        $planos = PlanoFinanceiro::get();

        if($this->idplano>0)
       { foreach($planos as $plano)
        {
            if ($this->idplano == $plano->id) 
            {return  $plano->nome;}


        }
    }


        else return "Sem plano";
    }
}