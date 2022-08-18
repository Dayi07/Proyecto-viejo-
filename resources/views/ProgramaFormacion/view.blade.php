<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Programa de Formacion</title>
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

    <table border>
    <tr> 
        <td>Nombre del Programa de Formacion</td> 
        <td>Modalidad de formacion</td>
        <td>Tipo de formacion</td>
        <td>Duracion del programa</td>
        <td>Version del Programa</td>
        <td>Nivel de Formacion</td>
        <td>Sector</td>
        <td>PDF del programa</td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($pro as $item)
            <td>{{$item->NombrePrograma}}</td> 
            <td>{{$item->ModalidadFormacion}}</td> 
            <td>{{$item->TipoFormacion}}</td> 
            <td>{{$item->DuracionPrograma}}</td> 
            <td>{{$item->VersionPrograma}}</td>
            <td>{{$item->NivelFormacion}}</td>
            <td>{{$item->NombreSector}}</td> 
            <td><a href="{{asset('storage/'.$item->URL)}}"> pdf </a></td>
            <td>
                <button onclick="eliminar( {{$item->id}} )">Eliminar</button><br>
                <a href="{{ route('ViewUpdateProgramaForm', $item->id) }}" ><i>Actualizar</i></a><br>
                <a href="{{ route('ViewUpdateFile', $item->id) }}" ><i>Cambiar Doc..c</i></a><br>

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