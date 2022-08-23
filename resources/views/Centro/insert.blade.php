@extends('menu')

@section('form')
    <form action="{{ route('InsertCentro') }}" method="POST">
        @csrf
        <label for="">Nombre del Centro</label>
        <input type="text" name="NombreCentro" id="NombreCentro"><br><br>
        
        <label for="floatingInput"">Regional perteneciente:</label>
        <select type="text" class="form-control" id="id_regional" name="id_regional">
            <option value="">Seleccione</option>

            @foreach ($reg as $item)
                <option value="{{$item->id}}">{{$item->NombreRegional}} </option>
            @endforeach

        </select> <br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection