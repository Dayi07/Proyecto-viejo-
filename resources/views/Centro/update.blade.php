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
                        <h2 class="content-header-title float-start mb-0">Centro</h2>
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
        <form action="{{ route('UpdateCentro') }}" method="POST">
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Actualizar Centro</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <input type="hidden" value="{{ $cen->id }}" name="id" id="id">
                                 <label class="form-label" for="basicInput">Ingrese nombre del centro:</label>
                                 <input type="text" value="{{ $cen->NombreCentro }}" class="form-control" id="NombreCentro" name="NombreCentro" placeholder="Centro" />
                             </div>
                         </div>  
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Seleccione regional perteneciente:</label>
                                <select class="form-select" aria-label="Default select example" name="id_regional" id="id_regional">
                                    @foreach ($reg as $item)
                                    <option value="{{ $item->id }}">{{$item->NombreRegional}} </option>
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