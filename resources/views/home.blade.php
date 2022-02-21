@extends('layouts.single')
@section('content')

@if( Auth::user()->role == 0 )
@include('layouts.aluno.index')
@endif



@if( Auth::user()->role == 1 )
@include('layouts.professor.index')
@endif


@if( Auth::user()->role == 9 )
@include('layouts.administrador.index')
@endif
</div>
</div>
</div>
</div>
</div>
@endsection