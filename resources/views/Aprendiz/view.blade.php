@extends('menu')

@section('form')

<table border>
    <tr>
        <td>Nombre del Aprendiz</td> 
        <td>Documento</td>
        <td>Genero</td>
        <td>Correo Electronico</td>
        <td>Estado</td>
        <td>Telefono</td>
        <td>Ficha</td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($info as $item)       
        <td>{{ $item->NombreAprendiz }} </td> 
        <td>{{ $item->TipoDocumento . " " . $item->NumeroDocumento }}</td>
        <td>{{ $item->GeneroAprendiz }}</td>
        <td>{{ $item->CorreoAprendiz }}</td>
        <td>{{ $item->EstadoAprendiz }}</td>
        <td>{{ $item->TelefonoAprendiz }}</td>
        <td>{{ $item->IdUnicoFicha }}</td>

        <td>
            <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
            <a href=" {{ route('ViewUpdateAprendiz', $item->id) }}"><i>Actualizar</i></a>
        </td>
    </tr>         
    @endforeach
</table>


@endsection