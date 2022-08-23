@extends('menu')

@section('form')
    <table border>
        <tr>
            <td>Nombre de la Regional</td> 
        </tr> 
        <tr>
            @foreach ($reg as $item)       
            <td>{{ $item->NombreRegional }} </td> 
            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
                <a href=" {{ route('ViewUpdateRegional', $item->id) }}"><i>Actualizar</i></a>
            </td>
        </tr> 
        @endforeach
    </table>

@endsection