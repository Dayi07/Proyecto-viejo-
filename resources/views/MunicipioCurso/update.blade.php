<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Municipio</title>
</head>

<nav>
    <ul>
        <li><a href="{{ route('ViewInsertMunicipio') }}"> Insertar Municipio  </a></li>
        <li><a href="{{ route('ViewMunicipio') }}">Ver Municipio</a></li>
    </ul>
    <ul>
        <li><a href="{{ route('ViewInsert') }}"> Insertar Pais </a></li>
        <li><a href="{{ route('ViewPais') }}">Ver Pais</a></li>
    </ul>
    <ul>
        <li><a href="{{ route('ViewInsertDepartamento') }}"> Insertar Departamento </a></li>
        <li><a href="{{ route('ViewDepartamento') }}">Ver Departamento</a></li>
    </ul>


</nav> 


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