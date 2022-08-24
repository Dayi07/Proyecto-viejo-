@extends('menu')

@section('form')

    <table border>
    <tr> 
        <td>Nombre del Programa de Formacion</td> 
        <td>Modalidad de formacion</td>
        <td>Tipo de formacion</td>
        <td>Duracion del programa</td>
        <td>Version del Programa</td>
        <td>Nivel de Formacion</td>
        <td>Sector</td>
        <td>PDF del programa</td>
        <td>Acciones</td>
    </tr>
    <tr> 
        @foreach ($pro as $item)
            <td>{{$item->NombrePrograma}}</td> 
            <td>{{$item->ModalidadFormacion}}</td> 
            <td>{{$item->TipoFormacion}}</td> 
            <td>{{$item->DuracionPrograma}}</td> 
            <td>{{$item->VersionPrograma}}</td>
            <td>{{$item->NivelFormacion}}</td>
            <td>{{$item->NombreSector}}</td> 
            <td><a href="{{asset('storage/'.$item->URL)}}"> pdf </a></td>
            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button><br>
                <a href="{{ route('ViewUpdateProgramaForm', $item->id) }}" ><i>Actualizar</i></a><br>
                <a href="{{ route('ViewUpdateFile', $item->id) }}" ><i>Cambiar Doc..c</i></a><br>

            </td>
    </tr>         
    @endforeach

</table>
 
@endsection