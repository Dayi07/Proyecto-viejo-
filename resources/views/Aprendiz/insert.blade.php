@extends('menu')

@section('form')
    <form action="{{ route('InsertAprendiz') }}" method="POST">
        @csrf
        <label for="">Nombre del Aprendiz</label>
        <input type="text" name="NombreAprendiz" id="NombreAprendiz"><br><br>

        <label for="">Tipo de identificacion</label>
        <select type="text" class="form-control" id="TipoDocumento" name="TipoDocumento">
            <option value="CC">CC</option>
            <option value="TI">TI</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label for="">Numero de identificacion</label>
        <input type="number" name="NumeroDocumento" id="NumeroDocumento"><br><br>

        <label for="">Genero</label>
        <select type="text" class="form-control" id="GeneroAprendiz" name="GeneroAprendiz">
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label for="">Correo electronico</label>
        <input type="email" name="CorreoAprendiz" id="CorreoAprendiz"><br><br>

        <label for="">Telefono de contacto</label>
        <input type="number" name="TelefonoAprendiz" id="TelefonoAprendiz"><br><br>

        <label for="">Estado del Aprendiz</label>
        <input type="text" name="EstadoAprendiz" id="EstadoAprendiz"><br><br>
        
        <label for="floatingInput"">Ficha perteneciente:</label>
        <select type="text" class="form-control" id="id_ficha" name="id_ficha">
            <option value="">Seleccione</option>
            @foreach ($ficha as $item)
                <option value="{{$item->id}}">{{$item->IdUnicoFicha}}</option>
            @endforeach
        </select> <br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection