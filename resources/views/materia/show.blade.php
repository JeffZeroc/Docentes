@extends('layouts.app_admin')

@section('title','Mostrar Materias')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carrera Id:</strong>
                            {{ $materia->carrera_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $materia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $materia->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Hora A:</strong>
                            {{ $materia->hora_a }}
                        </div>
                        <div class="form-group">
                            <strong>Hora P:</strong>
                            {{ $materia->hora_p }}
                        </div>
                        <div class="form-group">
                            <strong>Hora D:</strong>
                            {{ $materia->hora_d }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
