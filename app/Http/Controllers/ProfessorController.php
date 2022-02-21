<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Models\Aula;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{
         
    protected $view = 'crud.professor';
    protected $route = 'professores';

    public function index()
    {
        $user = Auth::user();
        if($user->role == 1)
        {
            $cad = Professor::Where('cpf', $user->cpf)->first();
            if(!$cad){
                return redirect()->back();
            }
            $aula = Aula::Where('idprofessor', $cad->id)->first();
            if($aula)
            $idcurso = $aula->idcurso;
            else
            $idcurso ="0";
            return view($this->view . '.update', compact('cad','idcurso'));
        }
        if($user->role == 9)
        {
            $cads = Professor::paginate(8);
            return view($this->view . '.index', compact('cads'));
        }
    }

    public function create()
    {
        return view($this->view.'.create');
    }

    public function store(ProfessorRequest $request)
    {
        Professor::create($request->all());
        return redirect()->route($this->route.'.index')->with('success', "Cadastro inserido com sucesso");
    }

    public function show($id)
    {
        $cad = Professor::find($id);
        $aulas = Aula::where('idcurso', $id)->get();

        if($cad){
            return view($this->view.'.show', compact('cad','aulas'));  
        }   
        return redirect()->back();
    }

    public function edit($id)
    {
        $cad = Professor::find($id);
        if(!$cad):
            return redirect()->back();
        endif;
        return view($this->view.'.update', compact('cad')); 
    }

    public function update(ProfessorRequest $request, $id)
    {
       
        $cad = Professor::find($id);
        if(!$cad):
            return redirect()->back();
        endif;
        
        $user = Auth::user();
        if($user->role == 1)
        {
            $cad = Professor::Where('cpf', $user->cpf)->first();
            if(!$cad){
                return redirect()->back();
            }
            $aula = Aula::Where('idprofessor', $user->id)->first();
            $idcurso = $aula->idcurso;
            $cad->update($request->all());
            $user->name = $request['nome'];
            $user->save();
            return view($this->view . '.update', compact('cad','idcurso'))->with('success', "Cadastro alterado com sucesso");;
        }
        if($user->role == 9)
        {
           
        $cad->update($request->all());
        return redirect()->route($this->route.'.index')->with('success', "Cadastro alterado com sucesso");
        }
        
        
    }

    public function destroy($id)
    {
        $cad = Professor::find($id);
        if(!$cad):
            return redirect()->back();
        endif;
        $cad->delete();
        return redirect()->route($this->route.'.index')->with('danger', "Cadastro deletado com sucesso");
    }
}