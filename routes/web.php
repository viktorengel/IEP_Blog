<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class );

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');

/* Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    if ($categoria) {
        # code...
        return "Bienvenido al cursos de : $curso, de la categoria: $categoria";
    } else {
        # code...
        return "Bienvenido al curso: $curso";
    }
    
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
