@extends('welcome')

@section('content')
    
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Curso</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Actualizar</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <form action="{{ route('UpdateCurso') }}" method="POST">
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Actualizar Curso</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <input type="hidden" value="{{$curso->id}}" name="id" id="id">

                                 <label class="form-label" for="basicInput">Ingrese numero del curso:</label>
                                 <input type="numbre" value="{{$curso->NumeroCursos}}" class="form-control" id="NumeroCursos" name="NumeroCursos" placeholder="Numero" />
                             </div>
                         </div>  
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese nombre del curso:</label>
                                <input type="text" value="{{$curso->NombreCurso}}" class="form-control" id="NombreCurso" name="NombreCurso" placeholder="Curso" />
                            </div>
                        </div> 
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese estado del curso:</label>
                                <input type="text" value="{{$curso->EstadoCurso}}" class="form-control" id="EstadoCurso" name="EstadoCurso" placeholder="Estado" />
                            </div>
                        </div> 
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese tipo del curso:</label>
                                <input type="text" value="{{$curso->TipoCurso}}" class="form-control" id="TipoCurso" name="TipoCurso" placeholder="Tipo" />
                            </div>
                        </div> 

                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Seleccione nombre del jornada:</label>
                                <select class="form-select" aria-label="Default select example" name="id_jornada" id="id_jornada">
                                    @foreach ($jor as $jornada)
                                    <option value="{{$jornada->id}}">{{ $jornada->NombreJornada }}</option>
                                    @endforeach
                                </select>                             
                            </div>
                         </div> 
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Seleccione nombre del sector:</label>
                                <select class="form-select" aria-label="Default select example" name="id_sector" id="id_sector">
                                    @foreach ($sec as $sector)
                                    <option value="{{$sector->id}}">{{ $sector->NombreSector }}</option>
                                    @endforeach
                                </select>                             
                            </div>
                         </div><div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Seleccione nombre del municipio:</label>
                                <select class="form-select" aria-label="Default select example" name="id_municipio" id="id_municipio">
                                    @foreach ($mun as $municipio)           
                                    <option value="{{$municipio->id}}">{{$municipio->NombreMunicipioCurso}}</option>
                                    @endforeach
                                </select>                             
                            </div>
                         </div>
                     </div>
                     <button class="btn btn-primary" type="submit">Guardar</button>
                 </div>
             </div>
        </form>
    </div>
    
    @endsection