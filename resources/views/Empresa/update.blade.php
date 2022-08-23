@extends('menu')

@section('form')
   <form action="{{ route('UpdateEmpresas') }}" method="POST">
        @csrf

        <input type="hidden" value="{{$emp->id}}" name="id" id="id">

        <label for="">Nombre de la Empresa</label>
        <input type="text" value="{{$emp->NombreEmpresa}}" name="NombreEmpresa" id="NombreEmpresa"><br><br>

        <label for="">Tipo de identificacion</label>
        <input type="text" value="{{$emp->TipoIdentificacion}}" name="TipoIdentificacion" id="TipoIdentificacion"><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection