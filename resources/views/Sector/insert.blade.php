@extends('menu')

@section('form')
    <form action="{{ route('InsertSector') }}" method="POST">
        @csrf
        <label for="">Nombre del Sector:</label>
        <input type="text" name="NombreSector" id="NombreSector"><br><br>

        <label for="">Nombre del Nuevo Sector:</label>
        <input type="text" name="NombreNuevoSector" id="NombreNuevoSector"><br><br>


        <button type="submit">Enviar</button>
    </form>
@endsection