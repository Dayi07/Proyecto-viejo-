@extends('menu')

@section('form')
   <form action="{{ route('UpdateOcupacion') }}" method="POST">
        @csrf

        <input type="hidden"  value="{{ $ocu->id }}" name="id" id="id">

        <label for="">Nombre de la Ocupacion: </label>
        <input type="text" value="{{ $ocu->NombreOcupacion }}" name="NombreOcupacion" id="NombreOcupacion"><br><br>

        <label for="">Codigo Horas: </label>
        <input type="number" value="{{ $ocu->CodigoHora }}" name="CodigoHora" id="CodigoHora"><br><br>
        
        <label for="floatingInput"">Sector perteneciente:</label>
        <select type="text" class="form-control" id="id_sector" name="id_sector">
            <option value="">Seleccione</option>
            @foreach ($sec as $item)
            <option value="{{ $item->id }}">{{$item->NombreSector}} </option>
            @endforeach
        </select> <br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection