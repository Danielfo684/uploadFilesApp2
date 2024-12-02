<?php

namespace App\Http\Controllers;

use App\Models\Subir;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubirController extends Controller
{   
    // Método para ver todos los archivos subidos
    public function index() {
        $archivos = Subir::all();

         if ($archivos->isEmpty()) {
            return redirect()->route('subir.create'); // Redirecciona al formulario de subir archivo si no hay ningun arhivo
        }

        return view('subir.index', compact('archivos'));  // Pasa los archivos a la vista

    }

    // Método para mostrar el formulario de subida
    public function create() {
        return view('subir.create');
    }

    // Método para mostrar un archivo específico
    public function show($id) {
        $archivo = Subir::findOrFail($id);
        return view('subir.show', compact('archivo'));
    }

    // Método para almacenar el archivo
    public function store(Request $request) {
        $request->validate([
            'archivo' => 'required|file|mimes:jpg,png,gif|max:2048'
        ]);

        $file = $request->file('archivo');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $timestampedName = date('Y_m_d_H_i_s') . '_' . $originalName;

        $filePath = "ejercicio/{$timestampedName}";
        Storage::putFileAs('ejercicio', $file, $timestampedName);

        Subir::firstOrCreate([
            'nombre_original' => $originalName,
            'nombre' => $timestampedName,
        ]);

        return redirect()->route('subir.index');
    }
}
