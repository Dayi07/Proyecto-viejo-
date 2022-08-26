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
                            <h2 class="content-header-title float-start mb-0">Empresa</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('ViewEmpresa') }}">Listado</a>
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
                <form action="{{ route('InsertEmpresa') }}" method="POST">
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Insertar Empresa</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <label class="form-label" for="basicInput">Ingrese nombre de la empresa:</label>
                                         <input type="text" class="form-control" id="NombreEmpresa" name="NombreEmpresa" placeholder="Nombre" />
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese tipo de identificacion:</label>
                                        <input type="text" class="form-control" id="TipoIdentificacion" name="TipoIdentificacion" placeholder="Tipo Identificacion" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese identificacion de la empresa:</label>
                                        <input type="number" class="form-control" id="IdEmpresa" name="IdEmpresa" placeholder="Identificacion" />
                                    </div>
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