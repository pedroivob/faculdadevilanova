<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AulaRequest;
use App\Http\Resources\AulaResource;
use App\Http\Resources\AulaResourceCollection;
use App\Models\Aula;
use App\Models\Curso;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    private $model;

    public function __construct(Aula $model)
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

        $cads = $cads->paginate(10);

        return new AulaResourceCollection($cads);
    }

    public function store(AulaRequest $request)
    {
        $cad = Aula::create($request->all());

        return new AulaResource($cad);
    }

    public function show($idcurso)
    {
        $cads = Curso::findOrFail($idcurso);
        $cads = Aula::where('idcurso', $idcurso)->get();

        return new AulaResourceCollection($cads);
    }

    public function update(AulaRequest $request, $id)
    {
        $cad = Aula::findOrFail($id);
        $cad->update($request->all());
        $id = $cad->id;

        return new AulaResource($cad);
    }

    public function destroy($id)
    {
        $cad = Aula::findOrFail($id);
        $cad->delete();

        return new AulaResource($cad);
    }
}