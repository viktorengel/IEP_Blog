<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* return view('welcome'); */
    return "Hola";
});

Route::get('cursos', function(){
    return "Cursos de PHP";
});

Route::get('cursos/create', function () {
    return "En esta página podras crear cursos";
});

Route::get('cursos/{curso}', function($curso){
    return "Bienvenido al curso: $curso";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    if ($categoria) {
        # code...
        return "Bienvenido al cursos de : $curso, de la categoria: $categoria";
    } else {
        # code...
        return "Bienvenido al curso: $curso";
    }
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
