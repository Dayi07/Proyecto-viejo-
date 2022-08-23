@extends('menu')

@section('form')
   <table border>
        <tr>
            <td>Nombre del convenio</td>
            <td>Covertura</td>
            <td>Sector</td>
            <td>Empresa</td>
        </tr> 
        <tr>
        @foreach ($info as $item)
            <td>{{$item->NombreConvenio}}</td>
            <td>{{$item->AmpliacionCovertura}}</td>
            <td>{{$item->NombreSector}}</td>
            <td>{{$item->NombreEmpresa}}</td>
            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
                <a href=" {{ route('ViewUpdateConvenio', $item->id) }}"><i>Actualizar</i></a>
            </td>
        </tr> 
        @endforeach
    </table>


@endsection