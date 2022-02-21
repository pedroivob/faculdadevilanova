@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Aluno
                    <a href="{{route('alunos.index') }}"><button type="button"
                            class="btn btn-success tet-white float-right">
                            <i class="fa fa-arrow-left"></i> VOLTAR</button></a>
                </div>

                <div class="card-body">

                    @include('layouts.alerts')
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dados</div>
                <div class="card-body">

                    <form action="{{ route('alunos.update', $cad->id)}}" method="post">
                        @method('PUT')
                        @include('crud.aluno.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection