<?php

use App\Http\Controllers\Estudiantes\EstudiantesInertiaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Comentarios\ComentariosController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Ruta PDF de estudiantes (debe ir antes del resource)
Route::get('/estudiantes/pdf', [EstudiantesInertiaController::class, 'pdf'])->name('estudiantes.pdf');

// ✅ Rutas RESTful para estudiantes
Route::resource('/estudiantes', EstudiantesInertiaController::class);

// ✅ Rutas personalizadas para eliminar estudiante
Route::get('/estudiantes/{estudiante}/delete', [EstudiantesInertiaController::class, 'delete'])->name('estudiantes.delete');
Route::delete('/estudiantes/{estudiante}', [EstudiantesInertiaController::class, 'destroy'])->name('estudiantes.destroy');

// ✅ Ruta PDF de comentarios (debe ir antes del resource)
Route::get('/comentarios/pdf', [ComentariosController::class, 'pdf'])->name('comentarios.pdf');

// ✅ Rutas RESTful para comentarios
Route::resource('/comentarios', ComentariosController::class);

require __DIR__.'/auth.php';


Route::resource('/comentarios', ComentariosController::class);
