<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Sector</title>
</head>

<table border>
    <tr>
        <td><a href="{{ route('ViewInsertMunicipio') }}"> Insertar Municipio  </a></td>
        <td><a href="{{ route('ViewInsert') }}"> Insertar Pais </a></td>
        <td><a href="{{ route('ViewInsertDepartamento') }}"> Insertar Departamento </a></td>
        <td><a href="{{ route('ViewInsertJornada') }}"> Insertar Jornada </a></td>
        <td><a href="{{ route('ViewInsertSector') }}"> Insertar Sector </a></td>
        <td><a href="{{ route('ViewInsertCurso') }}"> Insertar Curso </a></td>            
        <td><a href="{{ route('ViewInsertEmpresa') }}">Insertar Empresa</a></td>
        <td><a href="{{route('ViewInsertConvenio')}}">Insertar Convenio</a></td>
    </tr>
    <tr>
        <td><a href="{{ route('ViewMunicipio') }}">Ver Municipio</a></td>
        <td><a href="{{ route('ViewPais') }}">Ver Pais</a></td>
        <td><a href="{{ route('ViewDepartamento') }}">Ver Departamento</a></td>
        <td><a href="{{ route('ViewJornada') }}">Ver Jornada</a></td>
        <td><a href="{{ route('ViewSector') }}">Ver Sector</a></td>
        <td><a href="{{ route('ViweCurso') }}">Ver Curso</a></td>
        <td><a href="{{ route('ViewEmpresa') }}"> Ver Empresa</a></td>
        <td><a href="{{ route('ViewConvenio') }}"> Ver Convenio</a></td>
    </tr>
</table> <br><br><br><br>


<body>
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
</body>
</html>