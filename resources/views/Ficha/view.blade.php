@extends('menu')

@section('form')

<table border>
    <tr>
        <td>Identificador </td> 
        <td>Fecha de inicio</td>
        <td>Fecha de terminacion</td>
        <td>Etapa de la ficha</td>
        <td>Nombre del responsable</td>
        <td>Jornada</td>
        <td>Programa de Formacion</td>
        <td>Centro</td>

        <td>Acciones</td>
    </tr> 
    <tr>
        @foreach ($fic as $item)       
        <td>{{ $item->IdUnicoFicha }} </td> 
        <td>{{ $item->FechaInicio }}</td>
        <td>{{ $item->FechaTerminacion }}</td>
        <td>{{ $item->EtapaFicha }}</td>
        <td>{{ $item->NombreResponsable }}</td>
        <td>{{ $item->NombreJornada }}</td>
        <td>{{ $item->NombrePrograma }}</td>
        <td>{{ $item->NombreCentro }}</td>


        <td>
            <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
            <a href=" {{ route('ViewUpdateFicha', $item->id) }}"><i>Actualizar</i></a>
        </td>
    </tr>         
    @endforeach
</table>


@endsection