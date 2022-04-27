@extends('layouts.app_admin')

@section('title','Mostrar Distributivos')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Docente Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docente-materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $docenteMateria->docente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo Id:</strong>
                            {{ $docenteMateria->periodo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Materia Id:</strong>
                            {{ $docenteMateria->materia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
