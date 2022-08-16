<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Pais</title>
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
    <form action="{{ route('UpdatePais') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $pais->id}}" name="id" id="id">

        <label for="">Nombre del Pais</label>
        <input type="text" value="{{ $pais->NombrePaisCurso }}" name="NombrePaisCurso" id="NombrePaisCurso"><br><br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>