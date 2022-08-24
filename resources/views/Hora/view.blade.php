@extends('menu')

@section('form')

    <table border>
    <tr> 
        <td>Horas monitores</td> 
        <td>Horas inst empresa</td>
        <td>Horas contrtista externo</td>
        <td>Horas planta</td>
        <td>total horas</td>
        <td>Ocupacion </td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($hor as $item)       
        <td>{{ $item->HorasMonitores }} </td> 
        <td>{{ $item->HorasInstEmpresa }} </td> 
        <td>{{ $item->HorasContratistaExterno }} </td> 
        <td>{{ $item->HorasPlanta }} </td> 
        <td>{{ $item->TotalHoras }} </td> 
        <td>{{ $item->NombreOcupacion }} </td> 
        <td>
            <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
            <a href=" {{ route('ViewUpdateHora', $item->id) }}"><i>Actualizar</i></a>
        </td>
       
    </tr> 
    @endforeach
</table>


@endsection