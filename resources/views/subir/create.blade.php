@extends('base')

@section('title', 'Subir Archivo')

@section('content')
<div class="container">
    <div class="main-button">
        <h2>Upload Your File Here</h2>
    </div>


    <form action="{{ route('subir.store') }}" method="POST" enctype="multipart/form-data" class="upload-form">
        @csrf
        <input type="file" name="archivo" id="archivo" accept="image/*" required>

        <button type="submit">Upload File</button>
    </form>

    <a href="{{ route('subir.index') }}">
        <div class="back-button">Go Back</div>
</div>
</div>
@endsection