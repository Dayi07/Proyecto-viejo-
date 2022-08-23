@extends('menu')

@section('form')
   <form action="{{ route('InsertEspecial') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">Nombre del Programa de Formacion:</label>
        <input type="text" name="NombreProgEspecial"  id="NombreProgEspecial"> <br><br>

        <label for="">Modalidad de formacion:</label>
        <input type="text" name="ModalidadProgEspecial" id="ModalidadProgEspecial"><br><br>

        <label for="">Sector al que pertenece:</label> 
        <select name="id_sector" id="id_sector">    
        @foreach ($sec as $sector)
            <option value="{{$sector->id}}">{{ $sector->NombreSector }}</option>
        @endforeach
        </select><br><br>


        <label for="">PDF del programa:</label>
        <input type="file" name="URL" id="URL" accept=".pdf"><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection