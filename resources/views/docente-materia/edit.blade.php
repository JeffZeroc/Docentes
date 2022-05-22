@extends('layouts.app_admin')

@section('title','Editar Distributivos')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="alert alert-success" role="alert" id="alert_bien" style="display: none;">
                        <span >!Registro guardado correctamente.!</span>
                    </div>
                    
                    <div class="alert alert-danger" role="alert" id="alert_mal" style="display: none;">
                        <span id="mensaje_mal"> </span>
                    </div>
                    <div class="card-header">
                        <span class="card-title">Axtualizar Registro</span>
                    </div>
                    <div class="card-body">
                        <form id="form1">
                            @csrf
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Docente</label>
                                                <select name="docente_id" id="docente_id" class="form-select form-control @error('docente_id') is-invalid @enderror">
                                                    @foreach ( $docentes as $docente)
                                                        <option value="{{$docente->id}}"
                                                                @if ($docente->id == $docenteMateria->docente_id)
                                                                    {{ 'selected' }}
                                                                @endif>
                                                            {{ $docente->nombres}} {{ $docente->apellidos}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('docente_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Periodo Académico</label>
                                                <select name="periodo_id" id="periodo_id" class="form-select form-control @error('periodo_id') is-invalid @enderror">
                                                    @foreach ( $periodos as $periodo)
                                                        <option value="{{$periodo->id}}" 
                                                            @if ($periodo->id == $docenteMateria->periodo_id)
                                                                    {{ 'selected' }}
                                                            @endif>
                                                            {{ $periodo->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('periodo_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Carrera</label>
                                                <select name="carrera_id" id="carrera_id" class="form-select form-control @error('carrera_id') is-invalid @enderror">
                                                    <option value="">Seleccione Carrera</option>
                                                    @foreach ( $carreras as $carrera)
                                                        <option value="{{$carrera->id}}" 
                                                            @if ($carrera->id == $docenteMateria->carrera_id)
                                                                {{ 'selected' }}
                                                            @endif>
                                                            {{ $carrera->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('carrera_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Nivel</label>
                                                <select name="nivel" id="nivel" class="form-select form-control @error('nivel') is-invalid @enderror">
                                                    <option value="">Seleccione Nivel</option>
                                                </select>
                                                @error('nivel')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Asignatura</label>
                                                <select name="materia_id" id="materia_id" class="form-select form-control @error('materia_id') is-invalid @enderror">
                                                    <option value="">Seleccione Asignatura</option>
                                                </select>
                                                @error('materia_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row box-footer mt20 ">
                                    <div class="col-md-12">
                                        <a href="/home/docente-materias" class="btn btn-secondary">Volver</a>
                                        <button  class="btn btn-primary" id="guardar">Guardar</button>
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
