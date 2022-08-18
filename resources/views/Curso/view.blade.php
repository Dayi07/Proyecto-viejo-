<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Municipio</title>
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

    <table border>
    <tr> 
        <td>Numero de Cursos</td> 
        <td>Nombre de Curso</td>
        <td>Estado del Durso</td>
        <td>Tipo del Curso</td>
        <td>Jornada</td>
        <td>Municipio al que pertenece</td>
        <td>Sector al que pertenece</td>

        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($info as $item)
            <td>{{$item->NumeroCursos}}</td> 
            <td>{{$item->NombreCurso}}</td> 
            <td>{{$item->EstadoCurso}}</td> 
            <td>{{$item->TipoCurso}}</td> 
            <td>{{$item->NombreJornada}}</td>
            <td>{{$item->NombreMunicipioCurso}}</td>
            <td>{{$item->NombreSector}}</td> 

            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
                <a href="{{ route('ViewUpdateCurso', $item->id) }}" ><i>Actualizar</i></a>
            </td>
    </tr>         
    @endforeach

</table>


<script type="text/javascript">            
    function eliminar(id){
            
        swal({
            title: "¿Estas seguro de eliminar?",
            text: "Si eliminas este programa no podra ser recuperado",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            
        .then((willDelete) => {
                       
            if (willDelete) {
                location.href = "delete/" + id + "/";
            
                swal("Poof! El programa fue eliminado!", {
                icon: "success",
                });    
            
            } else {
                swal("El programa no se elimino");
            }
        });     
    }
            
            
</script>    

</body>
</html>