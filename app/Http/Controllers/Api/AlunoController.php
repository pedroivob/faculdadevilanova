<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlunoRequest;
use App\Http\Resources\AlunoResource;
use App\Http\Resources\AlunoResourceCollection;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private $model;

    public function __construct(Aluno $model){
        $this->model = $model;
    }

    public function index(Request $request)
    {
        $cad = $this->model;

        if($request->has('fields')){
            $fields = $request->get('fields');
            $cad = $cad->selectRaw($fields);
        }

       return new AlunoResourceCollection($cad->paginate(8));
    }

    public function store(AlunoRequest $request)
    {
        $cad = Aluno::create($request->all());
        return response()->json(['code'=>'200', "msg"=>'Cadastro inserido com sucesso']);
    }

    public function show($idcurso)
    {

        $cads = Curso::findOrFail($idcurso);
        $cads = Aluno::where('idcursos', $idcurso)->get();

        if(!$cads){
            return response()->json(["code"=>500,"msg"=>"Não foi possivel encontrar o id fornecido"]);
        }
        return new AlunoResourceCollection($cads);
    }

    public function update(AlunoRequest $request, $id)
    {
        $cad = Aluno::find($id);
        if(!$cad){
            return response()->json(["code"=>500,"msg"=>"Não foi possivel encontrar o id fornecido"]);
        }
        $cad->update($request->all());
        return response()->json(['code'=>'200', "msg"=>'Cadastro alterado com sucesso']);
    }

    public function destroy($id)
    {
        $cad = Aluno::find($id);

        if(!$cad){
            return response()->json(["code"=>500,"msg"=>"Não foi possivel encontrar o id fornecido"]);
        }
        $cad->delete();
        return response()->json(["code"=>200,"msg"=>"Cadastro removido com sucesso"]);
    }
}