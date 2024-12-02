@extends('base')

@section('title', 'Lista de Archivos')

@section('content')
<div class="container">
    <div class="gallery">´
        <table class="file-table">
            <thead>
                <tr>
                    <th class="file-table-header">File Name</th>
                    <th class="file-table-header">Publication Date</th>
                    <th class="file-table-header">Image</th>
                    <th class="file-table-header">Action</th>
                    <th class="file-table-header">Delete</th> <!-- Nueva columna para el botón de eliminación -->
                </tr>
            </thead>
            @foreach ($archivos as $archivo)
                <tbody>
                    <tr>
                        <td class="file-table-cell">{{ $archivo->nombre_original }}</td>
                        <td class="file-table-cell">
                            {{ $archivo->created_at }} <!-- Mostramos la fecha tal como está -->
                        </td>
                        <td class="file-table-cell file-image">
                            <img src="{{ route('imagenes.view', basename($archivo->nombre)) }}"
                                alt="{{ $archivo->nombre_original }}" />
                        </td>
                        <td class="file-table-cell">
                            <a href="{{ route('subir.show', $archivo->id) }}" class="view-button">
                                View Image
                            </a>
                        </td>
                        <td class="file-table-cell">
                            <!-- Formulario para eliminar el archivo -->
                            <form action="{{ route('subir.destroy', $archivo->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this file?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>

    </div>
</div>
@endsection