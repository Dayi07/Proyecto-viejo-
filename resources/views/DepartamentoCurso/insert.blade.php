<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Departamento</title>
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
    <form action="{{ route('InsertDepartamento') }}" method="POST">
        @csrf
        <label for="">Nombre del Departamento</label>
        <input type="text" name="NombreDepartamentoCurso" id="NombreDepartamentoCurso"><br><br>
        
        <label for="floatingInput"">Pais perteneciente:</label>
        <select type="text" class="form-control" id="id_pais" name="id_pais">
            <option value="">Seleccione</option>

            @foreach ($infopais as $item)
                <option value="{{$item->id}}">{{$item->NombrePaisCurso}} </option>
            @endforeach

        </select> <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>