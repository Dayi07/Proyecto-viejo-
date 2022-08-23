@extends('menu')

@section('form')
   <form action="{{ route('InsertConvenio') }}" method="POST">
        @csrf
        <label for="">Nombre del Convenio: </label>
        <input type="text" name="NombreConvenio" id="NombreConvenio"><br><br>

        <label for="">Covertura:</label>
        <input type="text" name="AmpliacionCovertura" id="AmpliacionCovertura"><br><br>

        <label for="">Sector al que apoya:</label> 
        <select name="id_sector" id="id_sector">    
        @foreach ($sec as $sector)
            <option value="{{$sector->id}}">{{ $sector->NombreSector }}</option>
        @endforeach
        </select><br><br>

        <label for="">Empresa a la que pertenece:</label> 
        <select name="id_empresa" id="id_empresa">    
        @foreach ($emp as $empresa)
            <option value="{{$empresa->id}}">{{ $empresa->NombreEmpresa}}</option>
        @endforeach
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection