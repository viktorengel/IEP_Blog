<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Cursos de PHP";
    }

    public function create(){
        return "En esta página podras crear cursos";
    }

    public function show($curso){
        return "Bienvenido al curso: $curso";
    }
}
