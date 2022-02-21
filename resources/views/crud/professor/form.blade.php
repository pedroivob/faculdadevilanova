@csrf
<div class="row">
    <div class="col-md-8">
        Nome:
        <input type="text" name="nome" id="nome" value="{{$cad->nome ?? old ('nome')}}" class="form-control">


    </div>


    <div class="col-md-4"> Matricula:
        <input type="number" name="matricula" id="matricula" value="{{ $cad->matricula ?? old ('matricula')}}"
            class="form-control">
    </div>

    <div class="col-md-6"> Competencia:
        <input type="text" name="competencia" id="competencia" value="{{ $cad->competencia ?? old ('competencia')}}"
            class="form-control">
    </div>
    <div class="col-md-6"> Escolaridade:

        <input type="text" name="escolaridade" id="escolaridade" value="{{ $cad->escolaridade ?? old ('escolaridade')}}"
            class="form-control">
        <br>
    </div>

    <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>
</div>