@extends('menu')

@section('form')
   <form action="{{ route('InsertJornada') }}" method="POST">
        @csrf
        <label for="">Nombre de la Jornada</label>
        <input type="text" name="NombreJornada" id="NombreJornada"><br><br>


        <button type="submit">Enviar</button>
    </form>
@endsection