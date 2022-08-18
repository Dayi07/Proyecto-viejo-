<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Convenio</title>
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
    <form action="{{ route('UpdateConvenio') }}" method="POST">
        @csrf

        <input type="hidden" value="{{$con->id}}" name="id" id="id">

        <label for="">Nombre del Convenio: </label>
        <input type="text" value="{{ $con->NombreConvenio }}" name="NombreConvenio" id="NombreConvenio"><br><br>

        <label for="">Covertura:</label>
        <input type="text" value="{{ $con->AmpliacionCovertura }}" name="AmpliacionCovertura" id="AmpliacionCovertura"><br><br>

        <label for="">Sector al que apoya:</label> 
        <select name="id_sector" id="id_sector">    
        @foreach ($sec as $sector)
            <option value="{{$sector->id}}">{{ $sector->NombreSector }}</option>
        @endforeach
        </select><br><br>

        <label for="">Empresa a la que pertenece:</label> 
        <select name="id_empresa" id="id_empresa">    
        @foreach ($emp as $empresa)
            <option value="{{$empresa->id}}">{{ $empresa->NombreEmpresa}}</option>
        @endforeach
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>