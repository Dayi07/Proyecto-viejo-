@extends('menu')

@section('form')
    <form action="{{ route('InsertRegional') }}" method="POST">
        @csrf
        <label for="">Nombre de la Regional:</label>
        <input type="text" name="NombreRegional" id="NombreRegional"><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection