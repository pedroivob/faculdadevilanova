<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    Olá, <strong>{{ Auth::user()->name }}</strong>. <br>
                    Seja bem vindo ao seu painel administrativo<br><br>
                    <hr>
                    @include('layouts.alerts')

                    @if($status == 0)
                    <p class="text-danger"> Seu cadastro esta imcompleto.<br>
                        Clique abaixo para concluir sua matricula <br></p>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">
                        Concluir matricula
                    </button>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@if(!$status == 0)
<div class="container">
    <div class="row ">
        <div class="col-md">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        <a href="/aluno/meusdados"> Meus dados</a><br>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>
                        <a href="/aluno/aulas"> Minhas Aulas</a><br>
                    </p>
                    </a>
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

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <strong> Nome:</strong> {{$cad->nome}}<br>

                                <strong> Matricula:</strong> {{$cad->matricula}} <br>

                                <strong> Data de nascimento: </strong>
                                {{ date('d/m/Y', strtotime( $cad->datanascimento) )}} <br>


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
    @endif

    @if($status == 0)
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('alunos.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <div class="row ">

                            <input type="hidden" name="nome" id="nome" value="{{  Auth::user()->name }}"
                                class="form-control"><br>

                            <input type="hidden" name="cpf" id="cpf" value="{{Auth::user()->cpf }}"
                                class="form-control">

                            <div class="col-md-7">

                                Matricula:
                                <input type="text" name="matricula" id="matricula"
                                    value="{{ $cad->matricula ?? old('matricula') }}" class="form-control"><br>
                            </div>
                            <div class="col-md-6">
                                Curso
                                <select class="select2bs4" name="idcursos" id="idcursos" style="width: 100%;">
                                    @foreach ($cursos as $curso)

                                    <option value="{{ $curso->id }}" @if (!empty($cad))
                                        {{ $cad->idcurso == $curso->id ? 'selected' : '' }} @endif>
                                        {{ $curso->nomedocurso }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                Plano Financeiro
                                <select class="select2bs4" name="idplano" id="idplano" style="width: 100%;">
                                    @foreach ($planos as $plano)

                                    <option value="{{ $plano->id }}" @if (!empty($cad))
                                        {{ $cad->idplano == $plano->id ? 'selected' : '' }} @endif>
                                        {{ $plano->nome }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <br>
                                Data de nascimento:
                                <input onchange="responsavel(this)" onload="responsavel(this)" type="date"
                                    name="datanascimento" id="datanascimento"
                                    value="{{ $cad->datanascimento ?? old('datanascimento') }}" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <br>
                                Responsável Financeiro(Para menores de 18 anos)
                                <input type="text" name="responsavelFinanceiro" id="responsavelFinanceiro"
                                    value="{{ $cad->responsavelFinanceiro ?? old('responsavelFinanceiro') }}"
                                    class="form-control"><br>
                            </div>

                        </div>
                        <br> <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>

                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                </div>

            </div>
        </div>
    </div>
    @endif