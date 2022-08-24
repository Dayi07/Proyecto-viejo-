@extends('menu')

@section('form')
   <form action="{{ route('InsertProgramaFor') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">Nombre del Programa de Formacion:</label>
        <input type="text" name="NombrePrograma"  id="NombrePrograma"> <br><br>

        <label for="">Modalidad de formacion:</label>
        <input type="text" name="ModalidadFormacion" id="ModalidadFormacion"><br><br>

        <label for="">Tipo de formacion:</label>
        <input type="text" name="TipoFormacion"  id="TipoFormacion"> <br><br>

        <label for="">Duracion del programa:</label>
        <input type="text" name="DuracionPrograma" id="DuracionPrograma"> <br><br>

        <label for="">Version del Programa:</label>
        <input type="text" name="VersionPrograma" id="VersionPrograma"> <br><br>
        
        <label for="">Nivel de Formacion:</label>
        <input type="text" name="NivelFormacion" id="NivelFormacion"> <br><br>

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