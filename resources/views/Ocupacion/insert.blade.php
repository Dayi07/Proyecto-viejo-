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
                        <h2 class="content-header-title float-start mb-0">Ocupacion</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Insertar</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <form action="{{ route('InsertOcupacion') }}" method="POST">
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Insertar Ocupacion</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <label class="form-label" for="basicInput">Ingrese nombre de la ocupacion:</label>
                                 <input type="text" class="form-control" id="NombreOcupacion" name="NombreOcupacion" placeholder="Nombre" />
                             </div>
                         </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese codigo de horas:</label>
                                <input type="number" class="form-control" id="CodigoHora" name="CodigoHora" placeholder="Codigo" />
                            </div>
                        </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Seleccione sector:</label>
                                <select class="form-select" aria-label="Default select example" name="id_sector" id="id_sector">
                                    @foreach ($sec as $item)
                                    <option value="{{$item->id}}">{{$item->NombreSector}}</option>
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