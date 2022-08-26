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
                            <h2 class="content-header-title float-start mb-0">Ficha</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('ViewFicha') }}">Listado</a>
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
                <form action="{{ route('InsertFicha') }}" method="POST">
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Insertar Ficha</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <label class="form-label" for="basicInput">Ingrese numero unico de la ficha:</label>
                                         <input type="number" class="form-control" id="IdUnicoFicha" name="IdUnicoFicha" placeholder="Numero unico" />
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese fecha de inicio:</label>
                                        <input type="date" class="form-control" id="FechaInicio" name="FechaInicio" placeholder="Fecha inicio" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese fecha de terminacion:</label>
                                        <input type="date" class="form-control" id="FechaTerminacion" name="FechaTerminacion" placeholder="Fecha terminacion" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese etapa de la ficha:</label>
                                        <input type="text" class="form-control" id="EtapaFicha" name="EtapaFicha" placeholder="Etapa" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese nombre del responsable:</label>
                                        <input type="text" class="form-control" id="NombreResponsable" name="NombreResponsable" placeholder="Responsable" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione jornada:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_jornada" id="id_jornada">
                                            @foreach ($jor as $item)
                                            <option value="{{ $item->id }}">{{$item->NombreJornada}} </option>
                                            @endforeach
                                        </select>                             
                                    </div>
                                 </div>
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione programa de formacion:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_programa_formacion" id="id_programa_formacion">
                                            @foreach ($prog as $item)
                                            <option value="{{ $item->id }}">{{$item->NombrePrograma}} </option>
                                            @endforeach
                                        </select>                             
                                    </div>
                                 </div>
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione centro:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_centro" id="id_centro">
                                            @foreach ($cen as $item)
                                            <option value="{{ $item->id }}">{{$item->NombreCentro}} </option>
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
        </div>
    </div>

@endsection