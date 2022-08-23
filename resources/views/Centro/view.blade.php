@extends('menu')

@section('form')

<table border>
    <tr>
        <td>Nombre del Centro</td> 
        <td>Nombre de la Regional</td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($cen as $item)       
        <td>{{ $item->NombreCentro }} </td> 
        <td>{{ $item->NombreRegional }}</td>
        <td>
            <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
            <a href=" {{ route('ViewUpdateCentro', $item->id) }}"><i>Actualizar</i></a>
        </td>
    </tr>         
    @endforeach
</table>


@endsection