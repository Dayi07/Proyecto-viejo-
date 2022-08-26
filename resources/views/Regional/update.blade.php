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
                        <h2 class="content-header-title float-start mb-0">Regional</h2>
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
        <form action="{{ route('UpdateRegional') }}" method="POST">
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Actualizar Regional</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <input type="hidden" value="{{ $reg->id }}" name="id" id="id">
                                 <label class="form-label" for="basicInput">Ingrese nombre de la regional:</label>
                                 <input type="text" class="form-control" value="{{ $reg->NombreRegional }}" id="NombreRegional" name="NombreRegional" placeholder="Regional"/>
                             </div>
                         </div>  
                     </div>
                     <button class="btn btn-primary" type="submit">Guardar</button>
                 </div>
             </div>
        </form>
    </div>
    
@endsection
