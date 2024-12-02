@extends('base')

@section('title', 'Subir Archivo')

@section('content')
    <div class="container">
        <h2>Sube tu archivo</h2>

        <form action="{{ route('subir.store') }}" method="POST" enctype="multipart/form-data" class="upload-form">
            @csrf
            <input type="file" name="archivo" id="archivo" accept="image/*" required>

            <button type="submit">Subir Archivo</button>
        </form>

        <p><a href="{{ route('subir.index') }}">Volver a la lista de archivos</a></p>
    </div>
@endsection
