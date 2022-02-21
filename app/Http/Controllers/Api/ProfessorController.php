<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfessorRequest;
use App\Http\Resources\ProfessorResource;
use App\Http\Resources\ProfessorResourceCollection;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    private $model;

    public function __construct(Professor $model){
        $this->model = $model;
    }

    public function index(Request $request)
    {
        $cad = $this->model;

        if($request->has('fields')){
            $fields = $request->get('fields');
            $cad = $cad->selectRaw($fields);
        }

       return new ProfessorResourceCollection($cad->paginate(8));
    }
    
    public function store(ProfessorRequest $request)
    {
        $cad = Professor::create($request->all());
        return response()->json(['code'=>'200', "msg"=>'Cadastro inserido com sucesso']);
    }

    public function show($id)
    {
        $cad = Professor::find($id);

        if(!$cad){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        return new ProfessorResource($cad);
    }

    public function update(ProfessorRequest $request, $id)
    {
        $cad = Professor::find($id);
        if(!$cad){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $cad->update($request->all());
        return response()->json(['code'=>'200', "msg"=>'Cadastro alterado com sucesso']);
    }

    public function destroy($id)
    {
        $cad = Professor::find($id);

        if(!$cad){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $cad->delete();
        return response()->json(["code"=>200,"msg"=>"Cadastro removido com sucesso"]);
    }
}