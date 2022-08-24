@extends('menu')

@section('form')
   <form action="{{ route('UpdateHora') }}" method="POST">
        @csrf

        <input type="hidden" value="{{ $hor->id }}" id="id" name="id">

        <label for="">Horas de monitores: </label>
        <input type="text" value="{{ $hor->HorasMonitores }}" name="HorasMonitores" id="HorasMonitores"><br><br>

        <label for="">Horas Inst Empresa: </label>
        <input type="text" value="{{ $hor->HorasInstEmpresa }}" name="HorasInstEmpresa" id="HorasInstEmpresa"><br><br>

        <label for="">Horas Contratista externo: </label>
        <input type="text" value="{{ $hor->HorasContratistaExterno }}" name="HorasContratistaExterno" id="HorasContratistaExterno"><br><br>

        <label for="">Horas planta: </label>
        <input type="text" value="{{ $hor->HorasPlanta }}" name="HorasPlanta" id="HorasPlanta"><br><br>
        
        <label for="">Total horas: </label>
        <input type="text" value="{{ $hor->TotalHoras }}" name="TotalHoras" id="TotalHoras"><br><br>

        <label for="floatingInput"">Ocupacion perteneciente:</label>
        <select type="text" class="form-control" id="id_ocupacion" name="id_ocupacion">
            <option value="">Seleccione</option>
            @foreach ($ocu as $item)
            <option value="{{ $item->id }}">{{$item->NombreOcupacion}} </option>
            @endforeach
        </select> <br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection