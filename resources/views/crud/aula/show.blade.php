@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Aula </div>

                <div class="card-body">
                    <a href="{{route('aulas.index') }}"><button type="button" class="btn btn-success tet-white">
                            <i class="fa fa-arrow-left"></i> VOLTAR</button></a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dados <strong>{{$cad->tema}}</strong>
                    <a href="{{ route('aulas.edit', $cad->id) }}" class="btn btn-info float-right">Editar</a>
                </div>

                <div class="card-body">
                    Numero de Aulas: {{ $cad->num_aula }} <br>
                    Tema: {{ $cad->tema }} <br>
                    Duração: {{ $cad->duracao}} <br>
                    Observação: {{ $cad->observacao }} <br>
                    ID Curso: {{ $cad->idcurso }} <br>
                    ID Professor: {{ $cad->idprofessor }} <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection