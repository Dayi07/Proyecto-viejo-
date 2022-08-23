@extends('menu')

@section('form')
   <form action="{{ route('UpdatePais') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $pais->id}}" name="id" id="id">

        <label for="">Nombre del Pais</label>
        <input type="text" value="{{ $pais->NombrePaisCurso }}" name="NombrePaisCurso" id="NombrePaisCurso"><br><br>


        <button type="submit">Enviar</button>
    </form>
@endsection