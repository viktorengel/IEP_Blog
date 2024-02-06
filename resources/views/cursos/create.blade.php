@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podras crear cursos</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="">
        </label>
        <br>
        <label for="">
            Descripción:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="5"></textarea>
            <br>
        </label>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" id="">
            <br>
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection