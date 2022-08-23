@extends('menu')

@section('form')
   <form action="{{ route('Insert') }}" method="POST">
        @csrf
        <label for="">Nombre del Pais</label>
        <input type="text" name="NombrePaisCurso" id="NombrePaisCurso"><br><br>


        <button type="submit">Enviar</button>
    </form>
@endsection