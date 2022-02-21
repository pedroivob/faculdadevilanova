@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Planos financeiros</div>

                <div class="card-body">
                    <a href="{{route('planos-financeiros.index') }}"><button type="button"
                            class="btn btn-success tet-white">
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
                <div class="card-header">Dados <strong>{{$cad->nome}}</strong>
                    <a href="{{ route('planos-financeiros.edit', $cad->id) }}"
                        class="btn btn-info float-right">Editar</a>
                </div>
                <div class="card-body">
                    ID: {{ $cad->id }} <br>
                    Nome: {{ $cad->nome }} <br>
                    Desconto: {{ $cad->desconto }}% <br>
                    Observação: {{ $cad->observacao }} <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection