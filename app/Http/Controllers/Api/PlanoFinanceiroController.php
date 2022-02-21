<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanoFinanceiroRequest;
use App\Http\Resources\PlanoFinanceiroResourceCollection;
use App\Http\Resources\PlanoFinanceiroResource;
use App\Models\PlanoFinanceiro;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PlanoFinanceiroController extends Controller
{
    private $model;

    public function __construct(PlanoFinanceiro $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        $cads = $this->model;

        if ($request->has('fields')) {
            $fields = $request->get('fields');
            $cads = $cads->selectRaw($fields);
        }

        $cads = $cads->paginate(8);

        return new PlanoFinanceiroResourceCollection($cads);
    }

    public function store(PlanoFinanceiroRequest $request)
    {
        $cad = PlanoFinanceiro::create($request->all());

        return new PlanoFinanceiroResource($cad);
    }

    public function show($id)
    {
        try
        {
            $cad = PlanoFinanceiro::findOrFail($id);
        }
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => 'Cadastro não encontrado'], 404);
        }
        
        return new PlanoFinanceiroResource($cad);
    }

    public function update(PlanoFinanceiroRequest $request, $id)
    {
        try
        {
            $cad = PlanoFinanceiro::findOrFail($id);
        }
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => 'Cadastro não encontrado'], 404);
        }

        $cad->update($request->all());
        
        $id = $cad->id;

        return new PlanoFinanceiroResource($cad);
    }

    public function destroy($id)
    {
        try
        {
            $cad = PlanoFinanceiro::findOrFail($id);
        }
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => 'Cadastro não encontrado'], 404);
        }

        $cad->delete();

        return new PlanoFinanceiroResource($cad);
    }
}
