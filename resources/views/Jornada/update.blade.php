@extends('menu')

@section('form')
   <form action="{{ route('UpdateJornada') }}" method="POST">
        @csrf

        <input type="hidden" value="{{ $jor->id }}" name="id" id="id">
        <label for="">Nombre de la Jornada</label>
        <input type="text" value="{{ $jor->NombreJornada }}" name="NombreJornada" id="NombreJornada"><br><br>


        <button type="submit">Enviar</button>
    </form>
@endsection