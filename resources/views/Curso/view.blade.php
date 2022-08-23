@extends('menu')

@section('form')

    <table border>
    <tr> 
        <td>Numero de Cursos</td> 
        <td>Nombre de Curso</td>
        <td>Estado del Durso</td>
        <td>Tipo del Curso</td>
        <td>Jornada</td>
        <td>Municipio al que pertenece</td>
        <td>Sector al que pertenece</td>

        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($info as $item)
            <td>{{$item->NumeroCursos}}</td> 
            <td>{{$item->NombreCurso}}</td> 
            <td>{{$item->EstadoCurso}}</td> 
            <td>{{$item->TipoCurso}}</td> 
            <td>{{$item->NombreJornada}}</td>
            <td>{{$item->NombreMunicipioCurso}}</td>
            <td>{{$item->NombreSector}}</td> 

            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
                <a href="{{ route('ViewUpdateCurso', $item->id) }}" ><i>Actualizar</i></a>
            </td>
    </tr>         
    @endforeach

</table>


@endsection