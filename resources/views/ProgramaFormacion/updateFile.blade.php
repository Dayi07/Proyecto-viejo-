@extends('menu')

@section('form')
   <form action="{{ route('UpdateFilePrograma') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" value="{{$pro->id}}" name="id" id="id">

        <label for="">PDF del programa:</label>
        <input type="file" name="URL" id="URL" accept=".pdf"><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection 