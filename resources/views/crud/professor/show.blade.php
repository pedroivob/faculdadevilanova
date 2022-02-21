@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Professor</div>

                <div class="card-body">
                    <a href="{{route('professores.index') }}"><button type="button" class="btn btn-success tet-white">
                            <i class="fa fa-arrow-left"></i> VOLTAR</button></a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dados</div>
                    <div class="card-body">
                        Nome: {{$cad->nome}} <br>
                        Matricula: {{$cad->matricula}} <br>
                        Competencia: {{$cad->competencia}} <br>
                        Escolaridade: {{$cad->escolaridade}} <br>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">Grade de aulas ministradas por <strong> {{$cad->nome}} </strong> </div>
                    <table class="table table-bordered bg-info text-white">
                        <thead>
                            <tr>
                                <th scope="col">Numero de Aula</th>
                                <th scope="col">Tema</th>
                                <th scope="col">Duração</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aulas as $aula)
                            <tr>
                                <td>{{ $aula->num_aula }} </td>
                                <td>{{ $aula->tema }} </td>
                                <td>{{ $aula->duracao}} Horas </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection