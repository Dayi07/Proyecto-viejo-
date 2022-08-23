@extends('menu')

@section('form')
    <table border>
        <tr>
            <td>Nombre del Sector</td> 
            <td>Nombre del Nuevo Sector</td>
        </tr> 
        <tr>
            @foreach ($sector as $item)       
            <td>{{ $item->NombreSector }}</td> 
            <td>{{ $item->NombreNuevoSector }}</td>
            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
                <a href=" {{ route('DatosUpdateSector', $item->id) }}">Actualizar</a>
            </td>
           
        </tr> 
        @endforeach
    </table>

@endsection