<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Municipio</title>
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

    <table border>
    <tr> 
        <td>Nombre del Municipio</td> 
        <td>Nombre del Departamento</td>
        <td>Acciones</td>
    </tr>
    <tr>
        @foreach ($infomun as $item)       
        <td>{{ $item->NombreMunicipioCurso }} </td> 
        <td>{{ $item->NombreDepartamentoCurso }} </td> 
        <td>
            <button onclick="eliminar( {{$item->id}} )">Eliminar</button>
            <a href=" {{ route('DatosUpdateMun', $item->id) }}"><i>Actualizar</i></a>
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