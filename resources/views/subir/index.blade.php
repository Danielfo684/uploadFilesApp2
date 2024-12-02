@extends('base')

@section('title', 'Lista de Archivos')

@section('content')
    <div class="container">
        <h2>All files</h2>
        <ul class="gallery">
            @foreach ($archivos as $archivo)
                <li>
                    <a href="{{ route('subir.show', $archivo->id) }}">
                        <img src="{{ route('imagenes.show', basename($archivo->nombre)) }}" alt="{{ $archivo->nombre_original }}" style="max-width: 200px; height: auto;">
                        <p>{{ $archivo->nombre_original }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
