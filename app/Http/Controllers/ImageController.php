<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{
    public function show($filename) {
        // Verifica si el archivo existe en el almacenamiento privado
        if (Storage::exists('ejercicio/' . $filename)) {
            // Devuelve la imagen
            return response()->file(storage_path('app/private/ejercicio/' . $filename));
        }

        abort(404);  // Si no se encuentra, lanza un error 404
    }
}
