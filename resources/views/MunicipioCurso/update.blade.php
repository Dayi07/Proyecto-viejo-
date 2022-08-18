<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Municipio</title>
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
    <form action="{{ route('Update') }}" method="POST">
        @csrf

        <input type="hidden" value="{{ $mun->id }}" name="id"  id="id">

        <label for="">Nombre del Municipio</label>
        <input type="text" value="{{ $mun->NombreMunicipioCurso }}" name="NombreMunicipioCurso" id="NombreMunicipioCurso"><br><br>
        
        <label for="floatingInput"">Departamento perteneciente:</label>
        <select type="text" class="form-control" id="id_departamento" name="id_departamento">
            @foreach ($infodep as $item)
            <option value="{{ $item->id }}">{{$item->NombreDepartamentoCurso}} </option>
            @endforeach
        </select> <br><br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>