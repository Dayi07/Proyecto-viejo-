@extends('menu')

@section('form')

    <table border>
    <tr> 
        <td>Nombre de la ocupacion</td> 
        <td>Codigo horas</td>
        <td>Sector</td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($ocu as $item)       
        <td>{{ $item->NombreOcupacion }} </td> 
        <td>{{ $item->CodigoHora }} </td> 
        <td>{{ $item->NombreSector }}</td>
        <td>
            <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
            <a href=" {{ route('ViewUpdateOcupacion', $item->id) }}"><i>Actualizar</i></a>
        </td>
       
    </tr> 
    @endforeach
</table>


@endsection