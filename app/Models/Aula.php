<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Curso, Professor};

class Aula extends Model
{
    use HasFactory;
    protected $table = "aulas";
    protected $fillable = ['num_aula', 'tema', 'duracao', 'observacao', 'idcurso', 'idprofessor'];

    public function _curso(){


        $cursos = Curso::all();

        if($this->idcurso>0)
       { foreach($cursos as $curso)
        {
            if ($this->idcurso == $curso->id) 
            
            {
                return  $curso->nomedocurso;
            }


        }
    }

    else return "Sem nome";
}
    public function _professor(){


        $professores = Professor::get();

        if($this->idprofessor>0)
       { foreach($professores as $professor)
        {
            if ($this->idprofessor == $professor->id) 
            {return  $professor->nome;}


        }
    }


        else return "Sem nome";
    }
}