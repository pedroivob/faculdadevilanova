<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CursoRequest;
use App\Http\Resources\CursoCollection;
use App\Http\Resources\CursoResource;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoControllerApi extends Controller
{
    private $model;

    public function __construct(Curso $model)
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

        return new CursoCollection($cads);
    }

    public function store(CursoRequest $request)
    {
        $cad = Curso::create($request->all());

        return new CursoResource($cad);
    }

    public function show($id)
    {
        $cad = Curso::findOrFail($id);

        return new CursoResource($cad);
    }

    public function update(CursoRequest $request, $id)
    {
        $cad = Curso::findOrFail($id);
        $cad->update($request->all());
        $id = $cad->id;

        return new CursoResource($cad);
    }

    public function destroy($id)
    {
        $cad = Curso::findOrFail($id);
        $cad->delete();

        return new CursoResource($cad);
    }

    public function disponiveis()
    {
        $cads = Curso::where('status', 'Disponível')->get();
        return new CursoCollection($cads);
    }

    public function indisponiveis()
    {
        $cads = Curso::where('status', 'Indisponível')->get();
        return new CursoCollection($cads);
    }
}