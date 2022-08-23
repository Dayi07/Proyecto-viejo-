@extends('menu')

@section('form')
   <form action="{{ route('UpdateConvenio') }}" method="POST">
        @csrf

        <input type="hidden" value="{{$con->id}}" name="id" id="id">

        <label for="">Nombre del Convenio: </label>
        <input type="text" value="{{ $con->NombreConvenio }}" name="NombreConvenio" id="NombreConvenio"><br><br>

        <label for="">Covertura:</label>
        <input type="text" value="{{ $con->AmpliacionCovertura }}" name="AmpliacionCovertura" id="AmpliacionCovertura"><br><br>

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