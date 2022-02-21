@extends('layouts.single')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Plano financeiro - <strong>{{$cad->nome}}</strong>
                    <a href="{{route('planos-financeiro.index') }}"><button type="button"
                            class="btn btn-success tet-white float-right">
                            <i class="fa fa-arrow-left "></i> VOLTAR</button></a>
                </div>
                <div class="card-body">


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
                @include('layouts.alerts')
                <div class="card-body">
                    <form action="{{ route('planos-financeiros.update', $cad->id) }}" method="post">
                        @method('PUT')
                        @include('crud.plano-financeiro.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection