@extends('layouts.single')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Professores
                    <a href="{{route('professores.create') }}"><button type="button"
                            class="btn btn-info tet-white float-right">
                            <i class="fa fa-plus"></i> Novo</button></a>
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @include('layouts.alerts')
    <div class="row ">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">MATRICULA</th>
                        <th scope="col">COMPETENCIA</th>
                        <th scope="col">ESCOLARIDADE</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cads as $cad)
                    <tr>
                        <td>{{ $cad->id }} </td>
                        <td>{{ $cad->nome }} </td>
                        <td>{{ $cad->matricula }} </td>
                        <td>{{ $cad->competencia}} </td>
                        <td>{{ $cad->escolaridade }} </td>
                        <td> <button data-bs-toggle="collapse" data-bs-target="#cad{{$cad->id}}"
                                class="btn btn-primary">Ações</button>

                            <div id="cad{{$cad->id}}" class="collapse">
                                <a class="dropdown-item" href="{{ route('professores.show', $cad->id) }}"><button
                                        type="button" class="btn btn-info"><i class="far fa-eye"></i></button></a>
                                <a class="dropdown-item" href="{{ route('professores.edit', $cad->id) }}"><button
                                        type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                                <a class="dropdown-item"><button type="button" class="btn btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#delete{{$cad->id}}">
                                        <i class="far fa-trash-alt"></i>
                                    </button></a>
                            </div>



                            <!-- The Modal -->
                            <div class="modal" id="delete{{$cad->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title">Tem certeza que deseja deletar este registro?</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal">X</button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="{{ route('professores.destroy', $cad->id) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Não,
                                                    Cancelar</button>
                                                <button type="submit" class="btn btn-danger">Sim, deletar</button>
                                            </form>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $cads->links() }}

        </div>
    </div>
    @endsection