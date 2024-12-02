@extends('base')

@section('title', 'Lista de Archivos')

@section('content')
<div class="container">
    <h2>All files</h2>
    <ul class="gallery">
        @foreach ($archivos as $archivo)
            <li>
                <a href="{{ route('subir.show', $archivo->id) }}">
                    <p>{{ $archivo->nombre_original }}</p>
                    <img src="{{ route('imagenes.view', basename($archivo->nombre)) }}"
                        alt="{{ $archivo->nombre_original }}" style="max-width: 400px; height: auto;">

                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection