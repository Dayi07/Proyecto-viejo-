@extends('menu')

@section('form')
    <form action="{{ route('SectorUpdateBD') }}" method="POST">
        @csrf

        <input type="hidden" value="{{$sec->id}}" name="id" id="id">

        <label for="">Nombre del Sector:</label>
        <input type="text" value="{{ $sec->NombreSector }}" name="NombreSector" id="NombreSector"><br><br>

        <label for="">Nombre del Nuevo Sector:</label>
        <input type="text" value="{{ $sec->NombreNuevoSector }}" name="NombreNuevoSector" id="NombreNuevoSector"><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection