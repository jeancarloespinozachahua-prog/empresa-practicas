<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'descripcion' => 'required|string|max:255',
            'curso' => 'required|string|max:100',
        ]);

        Comentario::create([
            'estudiante_id' => $request->estudiante_id,
            'descripcion' => $request->descripcion,
            'curso' => $request->curso,
        ]);

        return redirect()->back()->with('success', 'Comentario guardado correctamente.');
    }
}
