<?php

namespace App\Http\Controllers\Comentarios;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ComentariosController extends Controller
{
    public function index()
    {
        $comentarios = Comentario::with('estudiante')->get();
        return View::make('comentarios.index', compact('comentarios'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        return View::make('comentarios.create', compact('estudiantes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required',
            'descripcion'   => 'required',
            'curso'         => 'required'
        ]);

        Comentario::create($request->all());
        return Redirect::to('/comentarios');
    }

    public function edit($id)
    {
        $comentario = Comentario::with('estudiante')->findOrFail($id);
        $estudiantes = Estudiante::all();
        return View::make('comentarios.edit', compact('comentario', 'estudiantes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'estudiante_id' => 'required',
            'descripcion'   => 'required',
            'curso'         => 'required'
        ]);

        $comentario = Comentario::findOrFail($id);
        $comentario->update($request->all());

        return Redirect::to('/comentarios');
    }

    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();

        return Redirect::to('/comentarios');
    }
}
