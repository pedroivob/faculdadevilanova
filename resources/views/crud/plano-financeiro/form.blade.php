@csrf

<div class="form-group row">
    <label for="email" class="col-md-2 col-form-label text-md-right">Nome</label>
    <div class="col-md-10">
        <input id="nome" type="text" class="form-control" name="nome" value="{{ $cad->nome ?? old('nome') }}">
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-2 col-form-label text-md-right">Desconto</label>
    <div class="col-md-10">
        <input id="desconto" type="number" min="0" max="100" class="form-control" name="desconto"
            value="{{ $cad->desconto ?? old('desconto') }}">
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-2 col-form-label text-md-right">Observação</label>
    <div class="col-md-10">
        <input id="observacao" type="text" class="form-control" name="observacao"
            value="{{ $cad->observacao ?? old('observacao') }}">
    </div>
</div>

<br>
<button type="subbmit" class="btn btn-primary">Salvar</button>