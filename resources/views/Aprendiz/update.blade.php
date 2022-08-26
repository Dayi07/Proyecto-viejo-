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
                        <h2 class="content-header-title float-start mb-0">Aprendiz</h2>
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
        <form action="{{ route('UpdateAprendiz') }}" method="POST">
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Actualizar Aprendiz</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <input type="hidden" value="{{ $apr->id }}" name="id" id="id">

                                 <label class="form-label" for="basicInput">Ingrese nombre del aprendiz:</label>
                                 <input type="text" class="form-control" value="{{ $apr->NombreAprendiz }}" id="NombreAprendiz" name="NombreAprendiz" placeholder="Nombre" />
                             </div>
                         </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese tipo de identificacion:</label>
                                <select class="form-select" aria-label="Default select example" name="TipoDocumento" id="TipoDocumento">
                                    <option value="{{ $apr->TipoDocumento }}">Seleccione</option>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Otro">Otro</option>                        
                                </select>                             
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese numero de identificacion:</label>
                                <input type="text" class="form-control" value="{{ $apr->NumeroDocumento }}" id="NumeroDocumento" name="NumeroDocumento" placeholder="Documento" />
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese genero del aprendiz:</label>
                                <select class="form-select" aria-label="Default select example" name="GeneroAprendiz" id="GeneroAprendiz">
                                    <option value="{{ $apr->GeneroAprendiz }}">Seleccione</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Otro">Otro</option>                        
                                </select>                             
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese correo electronico:</label>
                                <input type="email" class="form-control" value="{{ $apr->CorreoAprendiz }}" id="CorreoAprendiz" name="CorreoAprendiz" placeholder="Correo" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese telefono de contacto:</label>
                                <input type="number" class="form-control" value="{{ $apr->TelefonoAprendiz }}" id="TelefonoAprendiz" name="TelefonoAprendiz" placeholder="Telefono" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese estado del aprendiz:</label>
                                <select class="form-select" aria-label="Default select example" value="{{ $apr->EstadoAprendiz }}" name="EstadoAprendiz" id="EstadoAprendiz">
                                    <option value="{{ $apr->EstadoAprendiz }}">Seleccione</option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>                             
                            </div>
                        </div>

                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Seleccione ficha:</label>
                                <select class="form-select" aria-label="Default select example" name="id_ficha" id="id_ficha">
                                   <option value="{{ $apr->id_ficha }}">Seleccione</option>
                                    @foreach ($ficha as $item)
                                    <option value="{{$item->id}}">{{$item->IdUnicoFicha}}</option>
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