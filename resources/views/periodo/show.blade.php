@extends('layouts.app_admin')

@section('title','Mostrar Periodo')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Periodo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('periodos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $periodo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio Periodo:</strong>
                            {{ $periodo->inicio_periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Fin Periodo:</strong>
                            {{ $periodo->fin_periodo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
