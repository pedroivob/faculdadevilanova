@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Aluno - <strong>{{$cad->nome}}</strong>
                    <a href="{{route('alunos.index') }}"><button type="button"
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
                <div class="card-header">Dados de <strong>{{$cad->nome}}</strong>
                    @if( Auth::user()->role == 9 )
                    <a href="{{ route('alunos.edit', $cad->id) }}" class="btn btn-info float-right">Editar</a>
                    @endif
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <strong> Nome:</strong> {{$cad->nome}}<br>

                            <strong> Matricula:</strong> {{$cad->matricula}} <br>

                            <strong> Data de nascimento: </strong> {{ date('d/m/Y', strtotime( $cad->datanascimento) )}}
                            <br>

                            <strong> Idade:</strong> {{$cad->idade}} <br>

                            <strong> Responsável:</strong>
                            @if($cad->idade >= 18 ) {{$cad->nome}} @else {{$cad->responsavelFinanceiro}} @endif <br>

                            <strong> CPF:</strong> {{$cad->cpf}} <br>
                        </div>
                        <div class="col-md">
                            <strong> Curso:</strong> {{$cad->_curso()}} <br>
                            <strong> Mensalidade:</strong> R${{$curso->mensalidade}}<br>
                            <strong> Plano:</strong> {{$cad->_plano()}} <br>
                            <strong> Desconto:</strong> {{$plano->desconto}}%<br>
                            <strong> Mensalidade do curso com o desconto:</strong> R${{$desconto}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">Grade de aulas do curso de <strong> {{$cad->_curso()}} </strong> </div>
                <table class="table table-bordered bg-info text-white">
                    <thead>
                        <tr>
                            <th scope="col">Numero de Aula</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Duração</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aulas as $cad)
                        <tr>
                            <td>{{ $cad->num_aula }} </td>
                            <td>{{ $cad->tema }} </td>
                            <td>{{ $cad->duracao}} Horas </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection