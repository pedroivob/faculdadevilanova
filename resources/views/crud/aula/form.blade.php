@csrf
<div class="row">

    <div class="col-md-6">
        Numero de aulas:
        <input type="number" name="num_aula" id="num_aula" value="{{ $cad->num_aula ?? old('num_aula') }}"
            class="form-control">
        <br>
    </div>

    <div class="col-md-6">
        Duração:
        <input type="text" name="duracao" id="duracao" value="{{ $cad->duracao ?? old('duracao') }}"
            class="form-control">
        <br>
    </div>

    <div class="col-md-12">
        Tema:
        <input type="text" name="tema" id="tema" value="{{ $cad->tema ?? old('tema') }}" class="form-control">
        <br>
    </div>

    <div class="col-md-12">
        Observação:
        <input type="text" name="observacao" id="observacao" value="{{ $cad->observacao ?? old('observacao') }}"
            class="form-control"><br>
    </div>

    <div class="col-md-6">
        Curso:
        <select class="select2bs4" name="idcurso" id="idcurso" style="width: 100%;">
            @foreach($cursos as $curso)

            <option value="{{$curso->id}}" @if (!empty($cad)) {{ $cad->idcurso == $curso->id ? 'selected' : '' }}
                @endif>
                {{$curso->nomedocurso}}
            </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        Professor:
        <select class="select2bs4" name="idprofessor" id="idprofessor" style="width: 100%;">
            @foreach($professores as $professor)

            <option value="{{$professor->id}}" @if (!empty($cad))
                {{ $cad->idprofessor == $professor->id ? 'selected' : '' }} @endif>
                {{$professor->nome}}
            </option>
            @endforeach
        </select>
        <br>
    </div>

    <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>

</div>