@extends('menu')

@section('form')
   <form action="{{ route('InsertEmpresa') }}" method="POST">
        @csrf
        <label for="">Nombre de la Empresa</label>
        <input type="text" name="NombreEmpresa" id="NombreEmpresa"><br><br>

        <label for="">Tipo de identificacion</label>
        <input type="text" name="TipoIdentificacion" id="TipoIdentificacion"><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection