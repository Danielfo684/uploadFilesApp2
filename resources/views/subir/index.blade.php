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
                </tr>
            </thead>
            @foreach ($archivos as $archivo)

                <tbody>
                    <tr>
                        <td class="file-table-cell">{{ $archivo->nombre_original }}</td>
                        <td class="file-table-cell">
                            {{($archivo->created_at) }}
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
                    </tr>
                </tbody>

            @endforeach
        </table>
    </div>
</div>
@endsection