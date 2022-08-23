@extends('menu')

@section('form')
   <form action="{{ route('UpdateCurso') }}" method="POST">
        @csrf

        <input type="hidden" value="{{$curso->id}}" name="id" id="id">

        <label for="">Numero del Curso:</label>
        <input type="number" value="{{$curso->NumeroCursos}}" name="NumeroCursos"  id="NumeroCursos"> <br><br>

        <label for="">Nombre del Curos:</label>
        <input type="text" value="{{$curso->NombreCurso}}" name="NombreCurso" id="NombreCurso"><br><br>

        <label for="">Estado Curso:</label>
        <input type="text" value="{{$curso->EstadoCurso}}" name="EstadoCurso"  id="EstadoCurso"> <br><br>

        <label for="">Tipo Curso:</label>
        <input type="text" value="{{$curso->TipoCurso}}" name="TipoCurso" id="TipoCurso"> <br><br>


        <label for="">Jornada al que pertenece:</label> 
        <select name="id_jornada" id="id_jornada">
            <option value=""></option>
        @foreach ($jor as $jornada)            
                <option value="{{$jornada->id}}">{{ $jornada->NombreJornada }}</option>
        @endforeach
        </select><br><br>

 
        <label for="">Sector al que pertenece:</label> 
        <select name="id_sector" id="id_sector">  
            <option value=""></option>  
        @foreach ($sec as $sector)
            <option value="{{$sector->id}}">{{ $sector->NombreSector }}</option>
        @endforeach
        </select><br><br>


        <label for="">Municipio al que pertenece:</label> 
        <select name="id_municipio" id="id_municipio">
            <option value=""></option>
        @foreach ($mun as $municipio)           
            <option value="{{$municipio->id}}">{{$municipio->NombreMunicipioCurso}}</option>
        @endforeach
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection