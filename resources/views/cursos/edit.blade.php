@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta página podras editar cursos</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="" value="{{ $curso->name }}">
        </label>
        <br>
        <label for="">
            Descripción:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="5">{{ $curso->descripcion }}</textarea>
            <br>
        </label>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" id="" value="{{ $curso->categoria }}">
            <br>
        </label>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection