@extends('menu')

@section('form')
   <table border>
        <tr>
            <td>Nombre de la Jornada</td> 
        </tr> 
        <tr>
            @foreach ($jornada as $item)       
            <td>{{ $item->NombreJornada}} </td> 
            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
                <a href=" {{ route('ViewUpdateJornada', $item) }}"><i>Actualizar</i></a>
            </td>
           
        </tr> 
        @endforeach
    </table>

@endsection