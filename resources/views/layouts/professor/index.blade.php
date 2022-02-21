<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    Olá, <strong> {{ Auth::user()->name }}</strong> <br>
                    Seja bem vindo ao seu painel administrativo.<br>
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
@if($status == 0) @else

<div class="container">
    <div class="row ">
        <div class="col-md">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon 	fas fa-user"></i>
                    <p>
                        <a href="/professor/meusdados"> Meus dados</a><br>


                    </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                        <a href="/professor/alunos"> Meus Alunos</a><br>

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
                        <a href="/professor/aulas">Minhas Aulas</a><br>

                    </p>
                    </a>
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
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('professores.store')}}" method="post">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <input type="hidden" name="nome" id="nome" value="{{ Auth::user()->name }}"
                            class="form-control">
                        <input type="hidden" name="cpf" id="cpf" value="{{ Auth::user()->cpf }}" class="form-control">


                        <div class="col-md-4"> Matricula:
                            <input type="number" name="matricula" id="matricula"
                                value="{{ $cad->matricula ?? old ('matricula')}}" class="form-control">
                        </div>

                        <div class="col-md-4"> Competencia:
                            <input type="text" name="competencia" id="competencia"
                                value="{{ $cad->competencia ?? old ('competencia')}}" class="form-control">
                        </div>
                        <div class="col-md-4"> Escolaridade:

                            <input type="text" name="escolaridade" id="escolaridade"
                                value="{{ $cad->escolaridade ?? old ('escolaridade')}}" class="form-control">
                            <br>
                        </div>

                        <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            </div>

        </div>
    </div>
</div>
@endif