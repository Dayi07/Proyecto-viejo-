@extends('menu')

@section('form')
   <form action="{{ route('InsertCurso') }}" method="POST">
        @csrf

        <label for="">Numero del Curso:</label>
        <input type="number" name="NumeroCursos"  id="NumeroCursos"> <br><br>

        <label for="">Nombre del Curos:</label>
        <input type="text" name="NombreCurso" id="NombreCurso"><br><br>

        <label for="">Estado Curso:</label>
        <input type="text" name="EstadoCurso"  id="EstadoCurso"> <br><br>

        <label for="">Tipo Curso:</label>
        <input type="text" name="TipoCurso" id="TipoCurso"> <br><br>


        <label for="">Jornada al que pertenece:</label> 
        <select name="id_jornada" id="id_jornada">
        @foreach ($jor as $jornada)
            <option value="{{$jornada->id}}">{{ $jornada->NombreJornada }}</option>
        @endforeach
        </select><br><br>


        <label for="">Sector al que pertenece:</label> 
        <select name="id_sector" id="id_sector">    
        @foreach ($sec as $sector)
            <option value="{{$sector->id}}">{{ $sector->NombreSector }}</option>
        @endforeach
        </select><br><br>


        <label for="">Municipio al que pertenece:</label> 
        <select name="id_municipio" id="id_municipio">
        @foreach ($mun as $municipio)           
            <option value="{{$municipio->id}}">{{$municipio->NombreMunicipioCurso}}</option>
        @endforeach
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection