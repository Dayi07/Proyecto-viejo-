@extends('menu')

@section('form')

<table border>
    <tr>
        <td>Nombre del departamento</td> 
        <td>Nombre del pais</td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($departamentos as $item)       
        <td>{{ $item->NombreDepartamentoCurso }} </td> 
        <td>{{ $item->NombrePaisCurso }}</td>
        <td>
            <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
            <a href=" {{ route('DatosUpdate', $item->id) }}"><i>Actualizar</i></a>
        </td>
    </tr>         
    @endforeach
</table>


@endsection