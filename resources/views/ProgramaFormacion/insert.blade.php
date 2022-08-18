<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Programa de Formacion</title>
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
        <td><a href="{{ route('ViewInsertPrograma') }}">Insertar Programa de Formacion</a></td>
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
        <td><a href="{{ route('ViewPrograma') }}"> Ver Programa de Formacion</a></td>
    </tr>
</table> <br><br><br><br>
 
  
<body>
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
</body>
</html>