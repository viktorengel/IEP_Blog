@extends('layouts.plantilla')

@section('title', 'Cursos '. $curso->name)

@section('content')

    <h1>Bienvenido al curso: {{ $curso->name }}</h1>

    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>

    {{-- <h1>Bienvenido al curso: <?php echo $curso; ?></h1> --}}

    <P><strong>Categoria: </strong>{{ $curso->categoria }}</P>
    {{ $curso->descripcion }}
@endsection