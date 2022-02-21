@if( Auth::user()->role == 0 )
@include('layouts.aluno.alunonav')
@endif



@if( Auth::user()->role == 1 )
@include('layouts.professor.professornav')
@endif


@if( Auth::user()->role == 9 )
@include('layouts.administrador.administradornav')
@endif