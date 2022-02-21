<?php

namespace App\Http\Controllers;

use App\Models\{Aluno, Aula, Curso, PlanoFinanceiro, Professor};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AlunoRequest;
use Carbon\Carbon;
use Database\Seeders\AulaSeeder;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $view = 'crud.aluno';
    protected $route = 'alunos';

    public function index()
    {
        $user = Auth::user();
        if($user->role == 1)
        {
            $professor = Professor::Where('cpf', $user->cpf)->first();
            if(!$professor){
                return redirect()->back();
            }
            $cads = Aula::Where('idprofessor', $professor->id)->paginate(8);
            $aula = Aula::Where('idprofessor', $professor->id)->first();
            if($aula){
                
            $idcurso = $aula->idcurso;            
            $cads = Aluno::Where('idcursos', $aula->idcurso)->paginate(8);
            }
            else
            $idcurso ="0";
            return view($this->view . '.index', compact('cads', 'idcurso'));
        }
        if($user->role == 0)
        {
            $cad = Aluno::Where('cpf', $user->cpf)->first();
            if(!$cad){
                return redirect()->back();
            }
            
        $cursos = Curso::all();
        $planos = PlanoFinanceiro::all();
            return view($this->view . '.update', compact('cad','cursos','planos'));
        }
        if($user->role == 9)
        {
            $cads = Aluno::paginate(8);
            return view($this->view . '.index', compact('cads'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        $planos = PlanoFinanceiro::all();
        return view($this->view . '.create',  compact('cursos', 'planos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        Aluno::create($request->all());
        return redirect()->route($this->route . '.index')->with('success', "Cadastrado efetivado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cad = Aluno::find($id);
        if ($cad) {
            $aulas = Aula::where('idcurso', $cad->idcursos)->get();
            $curso = Curso::find($cad->idcursos);
            $plano = PlanoFinanceiro::find($cad->idplano);
            $desconto = number_format((($curso->mensalidade) - (($curso->mensalidade / 100) * $plano->desconto)), 2, '.', '');
            return view($this->view . '.show', compact('cad', 'aulas', 'curso', 'plano', 'desconto'));
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cad = Aluno::find($id);
        if (!$cad) :
            return redirect()->back();
        endif;
        $cursos = Curso::all();
        $planos = PlanoFinanceiro::all();
        return view($this->view . '.update',  compact('cursos', 'planos', 'cad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoRequest $request, $id)
    {
        $cad = Aluno::find($id);
        if (!$cad) :
            return redirect()->back();
        endif;
        $user = Auth::user();
        if($user->role == 0)
        {

            $cad = Aluno::Where('cpf', $user->cpf)->first();
            if(!$cad){
                return redirect()->back();
            }
            
            $cad->update($request->all());
            $user->name = $request['nome'];
            $user->save();
           
        $cursos = Curso::all();
        $planos = PlanoFinanceiro::all();
        return view($this->view . '.update',  compact('cursos', 'planos', 'cad'))->with('success', "Cadastrado atualizado com sucesso!");
        }

        $cad->update($request->all());

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cad = Aluno::find($id);

        if (!$cad) :
            return redirect()->back();
        endif;

        $cad->delete();
        return redirect()->route($this->route . '.index')->with('danger', "Cadastro deletado com sucesso");
    }

    //Funções de API

    public function apiIndex(){
        return view('api.'.$this->view.'.index');
    }
}