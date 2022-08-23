@extends('menu')

@section('form')
   <table border>
        <tr>
        <td>Tipo de identificacion</td> 
        <td>Nombre de la Empresa</td>
        </tr> 
        <tr>
        @foreach ($emp as $item)
            <td>{{$item->TipoIdentificacion}}</td>
            <td>{{$item->NombreEmpresa}}</td>
            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
                <a href=" {{ route('ViewUpdateEmpresa', $item->id) }}"><i>Actualizar</i></a>
            </td>
        </tr> 
        @endforeach
    </table>


@endsection