<?php

namespace App\Http\Controllers\Estudiantes;

use App\Models\Estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Barryvdh\DomPDF\Facade\Pdf;

class EstudiantesInertiaController extends Controller
{
    public function index(Request $request)
    {
        $estudiantes = Estudiante::orderBy('id', 'DESC')->get();

        return Inertia::render('Estudiante/Index', [
            'estudiantes' => $estudiantes
        ]);
    }

    public function create(Request $request)
    {
        return Inertia::render('Estudiante/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:estudiantes',
            'nombres' => 'required|string|max:100',
            'pri_ape' => 'required|string|max:100',
            'seg_ape' => 'required|string|max:100',
            'dni' => 'required|digits:8|unique:estudiantes',
        ]);

        Estudiante::create($request->all());

        return Redirect::route('estudiantes.index')->with('success', 'Estudiante creado correctamente.');
    }

    public function edit(Estudiante $estudiante)
    {
        return Inertia::render('Estudiante/Edit', [
            'estudiante' => $estudiante
        ]);
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'codigo' => 'required|unique:estudiantes,codigo,' . $estudiante->id,
            'nombres' => 'required|string|max:100',
            'pri_ape' => 'required|string|max:100',
            'seg_ape' => 'required|string|max:100',
            'dni' => 'required|digits:8|unique:estudiantes,dni,' . $estudiante->id,
        ]);

        $estudiante->update($request->all());

        return Redirect::route('estudiantes.index')->with('success', 'Estudiante actualizado correctamente.');
    }

    public function delete($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return Redirect::route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente.');
    }

    public function pdf()
    {
        $estudiantes = Estudiante::orderBy('id', 'DESC')->get();
        $pdf = Pdf::loadView('estudiantes.pdf', compact('estudiantes'));
        return $pdf->download('estudiantes.pdf');
    }
}
