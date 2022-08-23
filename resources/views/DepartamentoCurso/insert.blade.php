@extends('menu')

@section('form')
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
@endsection