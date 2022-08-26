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
                            <h2 class="content-header-title float-start mb-0">Programa de formacion</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('ViewPrograma') }}">Listado</a>
                                    </li>

                                    <li class="breadcrumb-item"><a href="#">Insertar</a>
                                    </li>                   
                                </ol>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>      
            <div class="content-body">
                <form action="{{ route('InsertProgramaFor') }}" method="POST">
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Insertar Programa de formacion</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <label class="form-label" for="basicInput">Ingrese nombre del Programa de Formacion:</label>
                                         <input type="text" class="form-control" id="NombrePrograma" name="NombrePrograma" placeholder="Nombre" />
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese modalidad de formacion:</label>
                                        <input type="text" class="form-control" id="ModalidadFormacion" name="ModalidadFormacion" placeholder="Modalidad" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese tipo de formacion:</label>
                                        <input type="text" class="form-control" id="TipoFormacion" name="TipoFormacion" placeholder="Tipo" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese duracion del programa:</label>
                                        <input type="text" class="form-control" id="DuracionPrograma" name="DuracionPrograma" placeholder="Duracion" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese version del programa:</label>
                                        <input type="text" class="form-control" id="VersionPrograma" name="VersionPrograma" placeholder="Version" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese nivel del programa:</label>
                                        <input type="text" class="form-control" id="NivelFormacion" name="NivelFormacion" placeholder="Nivel" />
                                    </div>
                                </div>  
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione sector perteneciente:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_sector" id="id_sector">
                                            @foreach ($sec as $item)
                                            <option value="{{ $item->id }}">{{$item->NombreSector}} </option>
                                            @endforeach
                                        </select>                             
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                    <label for="formFile" class="form-label">PDF del programa</label>
                                    <input class="form-control" type="file" name="URL" id="URL" accept=".pdf"/>
                                </div>      
                             </div> 
                             <button class="btn btn-primary" type="submit">Guardar</button>
                         </div>
                     </div>
                </form>
            </div>
        </div>
    </div>

@endsection