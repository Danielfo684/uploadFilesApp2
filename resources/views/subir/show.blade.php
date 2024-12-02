@extends('base')

@section('title', 'Ver Archivo')

@section('content')
<div class="container">
    <h2>Selected File</h2>

    <div class="show-file">
        <div class="info">
            <h3>Original name: {{ $archivo->nombre_original }}</h3>
            <h3>Date{{ $archivo->created_at->format('d/m/Y H:i:s') }}</h3>
        </div>
        <div class="image-container">
            <img src="{{ route('imagenes.show', basename($archivo->nombre)) }}" alt="{{ $archivo->nombre_original }}"
                style="width: 500px; height: auto;">
        </div>
    </div>
    <a href="{{ route('subir.index') }}" class="back-button">Go Back</a>
</div>
@endsection