@csrf
<div class="row ">

    <input type="hidden" name="idade" id="idade" value="{{ $cad->idade ?? old('idade') }}" class="form-control">
    <div class="col-md-8">
        Nome:
        <input type="text" name="nome" id="nome" value="{{ $cad->nome ?? old('nome') }}" class="form-control"><br>
    </div>

    <div class="col-md-4">

        Matricula:
        <input type="text" name="matricula" id="matricula" value="{{ $cad->matricula ?? old('matricula') }}"
            class="form-control"><br>
    </div>

    <div class="col-md-4">

        CPF:
        <input type="text" name="cpf" id="cpf" value="{{ $cad->cpf ?? old('cpf') }}" class="form-control">
    </div>

    <div class="col-md-4">
        Curso
        <select class="select2bs4" name="idcursos" id="idcursos" style="width: 100%;">
            @foreach ($cursos as $curso)

            <option value="{{ $curso->id }}" @if (!empty($cad)) {{ $cad->idcursos == $curso->id ? 'selected' : '' }}
                @endif>
                {{ $curso->nomedocurso }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4">
        Plano Financeiro
        <select class="select2bs4" name="idplano" id="idplano" style="width: 100%;">
            @foreach ($planos as $plano)

            <option value="{{ $plano->id }}" @if (!empty($cad)) {{ $cad->idplano == $plano->id ? 'selected' : '' }}
                @endif>
                {{ $plano->nome }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <br>
        Data de nascimento:
        <input onchange="responsavel(this)" onload="responsavel(this)" type="date" name="datanascimento"
            id="datanascimento" value="{{ $cad->datanascimento ?? old('datanascimento') }}" class="form-control"><br>
    </div>

    <div class="col-md-8">
        <br>
        Responsável Financeiro(Para menores de 18 anos)
        <input type="text" name="responsavelFinanceiro" id="responsavelFinanceiro"
            value="{{ $cad->responsavelFinanceiro ?? old('responsavelFinanceiro') }}" class="form-control"><br>
    </div>

</div>
<br> <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>