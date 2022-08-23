@extends('menu')

@section('form')
   <form action="{{ route('UpdateEspecial') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" value="{{ $esp->id }}" name="id" id="id">
        <input type="hidden" value="{{ $esp->URL }}" name="URL" id="URL">

        <label for="">Nombre del Programa de Formacion:</label>
        <input type="text" value="{{ $esp->NombreProgEspecial }}" name="NombreProgEspecial"  id="NombreProgEspecial"> <br><br>

        <label for="">Modalidad de formacion:</label>
        <input type="text" value="{{ $esp->ModalidadProgEspecial }}" name="ModalidadProgEspecial" id="ModalidadProgEspecial"><br><br>

        <label for="">Sector al que pertenece:</label> 
        <select name="id_sector" id="id_sector">    
        @foreach ($sec as $sector)
            <option value="{{$sector->id}}">{{ $sector->NombreSector }}</option>
        @endforeach
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection