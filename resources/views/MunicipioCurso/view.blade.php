@extends('menu')

@section('form')

    <table border>
    <tr> 
        <td>Nombre del Municipio</td> 
        <td>Nombre del Departamento</td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($infomun as $item)       
        <td>{{ $item->NombreMunicipioCurso }} </td> 
        <td>{{ $item->NombreDepartamentoCurso }} </td> 
        <td>
            <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
            <a href=" {{ route('DatosUpdateMun', $item->id) }}"><i>Actualizar</i></a>
        </td>
       
    </tr> 
    @endforeach
</table>


@endsection