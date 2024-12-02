@extends('base')

@section('title', 'Ver Archivo')

@section('content')
    <div class="container">
        <h2>Ver Archivo</h2>

        <div class="file-details">
            <div class="image-container">
                <img src="{{ route('imagenes.show', basename($archivo->nombre)) }}" alt="{{ $archivo->nombre_original }}" style="width: 800px; height: auto;">
            </div>
            <div class="file-info">
                <p><strong>ID:</strong> {{ $archivo->id }}</p>
                <p><strong>Nombre Original:</strong> {{ $archivo->nombre_original }}</p>
                <p><strong>Nombre Guardado:</strong> {{ $archivo->nombre }}</p>
                <p><strong>Fecha de Subida:</strong> {{ $archivo->created_at->format('d/m/Y H:i:s') }}</p>
            </div>
        </div>

        <a href="{{ route('subir.index') }}" class="back-button">Volver a la lista de archivos</a>
    </div>
@endsection
