@extends('base')

@section('title', 'Lista de Archivos')

@section('content')
    <div class="container">
        <h2>Archivos Subidos</h2>
        <ul class="file-list">
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
