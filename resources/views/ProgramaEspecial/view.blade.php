@extends('menu')

@section('form')

    <table border>
    <tr> 
        <td>Nombre del Programa de Formacion</td> 
        <td>Modalidad de formacion</td>
        <td>Sector</td>
        <td>PDF del programa</td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($esp as $item)
            <td>{{$item->NombreProgEspecial}}</td> 
            <td>{{$item->ModalidadProgEspecial}}</td> 
            <td>{{$item->NombreSector}}</td> 
            <td><a href="{{asset('storage/'.$item->URL)}}"> pdf </a></td>
            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button><br>
                <a href="{{ route('ViewUpdateEspecial', $item->id) }}" ><i>Actualizar</i></a><br>
                <a href="{{--route('ViewUpdateFile', $item->id) --}}" ><i>Cambiar Doc..</i></a><br>

            </td>
    </tr>         
    @endforeach

</table>
 
@endsection