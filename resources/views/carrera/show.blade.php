@extends('layouts.app_admin')

@section('title','Mostrar Carrera')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Carrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carreras.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Facultad Id:</strong>
                            {{ $carrera->facultad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $carrera->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $carrera->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $carrera->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $carrera->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
