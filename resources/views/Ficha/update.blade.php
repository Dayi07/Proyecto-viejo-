@extends('menu')

@section('form')
   <form action="{{ route('UpdateFicha') }}" method="POST">
        @csrf

        <input type="hidden" value="{{ $fic->id }}" name="id" id="id">

        <label for="">Identificador Unico: </label>
        <input type="numbre" value="{{ $fic->IdUnicoFicha }}" name="IdUnicoFicha" id="IdUnicoFicha"><br><br>

        <label for="">Fecha de inicio:</label>
        <input type="date" value="{{ $fic->FechaInicio }}" name="FechaInicio" id="FechaInicio"><br><br>

        <label for="">Fecha de terminacion:</label>
        <input type="date" value="{{ $fic->FechaTerminacion }}" name="FechaTerminacion" id="FechaTerminacion"><br><br>

        <label for="">Etapa de la ficha:</label>
        <input type="text" value="{{ $fic->EtapaFicha }}" name="EtapaFicha" id="EtapaFicha"><br><br>
 
        <label for="">Nombre del responsable</label>
        <input type="text" value="{{ $fic->NombreResponsable }}" name="NombreResponsable" id="NombreResponsable"><br><br>
        
        <label for="floatingInput"">Centro perteneciente:</label>
        <select type="text" class="form-control" id="id_centro" name="id_centro">
            @foreach ($cen as $item)
                <option value="{{$item->id}}">{{$item->NombreCentro}} </option>
            @endforeach
        </select> <br><br>

        <label for="floatingInput"">Jornada:</label>
        <select type="text" class="form-control" id="id_jornada" name="id_jornada">
            @foreach ($jor as $item)
                <option value="{{$item->id}}">{{$item->NombreJornada}} </option>
            @endforeach
        </select> <br><br>

        <label for="floatingInput"">Programa de Formacion:</label>
        <select type="text" class="form-control" id="id_programa_formacion" name="id_programa_formacion">
            @foreach ($prog as $item)
                <option value="{{$item->id}}">{{$item->NombrePrograma}} </option>
            @endforeach
        </select> <br><br>


        <button type="submit">Enviar</button>
    </form>
@endsection