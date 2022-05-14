@extends('layouts.app_admin')

@section('title','Crear Periodo')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Periodo Académico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('periodos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="box-body">
                                        <div class="row">
                                                
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nombre" >Nombre</label>
                                                    <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" placeholder="Nombre Periodo Académico" autofocus>
                                                    @error('nombre')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="codigo" >Código</label>
                                                    <input id="codigo" type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo') }}" placeholder="Codigo Periodo Académico" autofocus>
                                                    @error('codigo')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                </div>
                                            </div>
    
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="inicio_periodo" >Inicio Periodo Académico</label>
                                                    <input id="inicio_periodo" type="date" name="inicio_periodo" class="form-control @error('inicio_periodo') is-invalid @enderror" value="{{ old('inicio_periodo') }}"  autofocus>
                                                    @error('inicio_periodo')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="fin_periodo" >Fin Periodo Académico</label>
                                                    <input id="fin_periodo" type="date" name="fin_periodo" class="form-control @error('fin_periodo') is-invalid @enderror" value="{{ old('fin_periodo') }}"  autofocus>
                                                    @error('fin_periodo')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label >Estado</label>
                                                    <select name="estado" id="estado" class="form-select form-control "  >
                                                        <option value="1" @if (old('estado') == "1") {{ 'selected' }} @endif >Vigente</option>      
                                                        <option value="0" @if (old('estado') == "0") {{ 'selected' }} @endif >Caducado</option>                   
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row box-footer mt20">
                                    
                                    <div class="col-md-12">
                                        <a href="/home/periodos" class="btn btn-secondary">Volver</a>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                    
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
