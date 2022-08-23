@extends('menu')

@section('form')
   <form action="{{ route('InsertMunicipio') }}" method="POST">
        @csrf
        <label for="">Nombre del Municipio</label>
        <input type="text" name="NombreMunicipioCurso" id="NombreMunicipioCurso"><br><br>
        
        <label for="floatingInput"">Departamento perteneciente:</label>
        <select type="text" class="form-control" id="id_departamento" name="id_departamento">
            <option value="">Seleccione</option>
            @foreach ($infodep as $item)
            <option value="{{ $item->id }}">{{$item->NombreDepartamentoCurso}} </option>
            @endforeach
        </select> <br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection