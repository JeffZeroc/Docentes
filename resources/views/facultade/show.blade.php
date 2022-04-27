@extends('layouts.app_admin')

@section('title','Mostrar Facultades')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Facultad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facultades.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $facultade->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
