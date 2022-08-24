@extends('menu')

@section('form')
   <form action="{{ route('UpdateProgramaForm') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" value="{{$pro->id}}" name="id" id="id">
        <input type="hidden" value="{{$pro->URL}}" name="id" id="id">


        <label for="">Nombre del Programa de Formacion:</label>
        <input type="text" value="{{ $pro->NombrePrograma }}" name="NombrePrograma"  id="NombrePrograma"> <br><br>

        <label for="">Modalidad de formacion:</label>
        <input type="text" value="{{ $pro->ModalidadFormacion }}" name="ModalidadFormacion" id="ModalidadFormacion"><br><br>

        <label for="">Tipo de formacion:</label>
        <input type="text" value="{{ $pro->TipoFormacion }}" name="TipoFormacion"  id="TipoFormacion"> <br><br>

        <label for="">Duracion del programa:</label>
        <input type="text" value="{{ $pro->DuracionPrograma }}" name="DuracionPrograma" id="DuracionPrograma"> <br><br>
 
       <label for="">Version del Programa:</label>
        <input type="text" value="{{ $pro->VersionPrograma }}" name="VersionPrograma" id="VersionPrograma"> <br><br>
        
        <label for="">Nivel de Formacion:</label>
        <input type="text" value="{{ $pro->NivelFormacion }}" name="NivelFormacion" id="NivelFormacion"> <br><br>

        <label for="">Sector al que pertenece:</label> 
        <select name="id_sector" id="id_sector">    
        @foreach ($sec as $sector)
            <option value="{{$sector->id}}">{{ $sector->NombreSector }}</option>
        @endforeach
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection