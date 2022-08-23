@extends('menu')

@section('form')
   <table border>
        <tr>
            <td>Nombre del pais</td> 
        </tr> 
        <tr>
            @foreach ($objeto as $pais)       
            <td>{{ $pais->NombrePaisCurso }} </td> 
            <td>
                <button onclick="eliminar( {{$pais->id}} )">Eliminar</button>
                <a href=" {{ route('ViewUpdate', $pais) }}"><i>Actualizar</i></a>
            </td>
           
        </tr> 
        @endforeach
    </table>

@endsection