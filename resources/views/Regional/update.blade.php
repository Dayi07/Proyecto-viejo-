@extends('menu')

@section('form')
    <form action="{{ route('UpdateRegional') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $reg->id}}" name="id" id="id">

        <label for="">Nombre de la Regional: </label>
        <input type="text" value="{{ $reg->NombreRegional }}" name="NombreRegional" id="NombreRegional"><br><br>


        <button type="submit">Enviar</button>
    </form>
@endsection