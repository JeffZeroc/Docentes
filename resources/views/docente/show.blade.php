@extends('layouts.app_admin')

@section('title','Mostrar Docentes')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $docente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $docente->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $docente->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $docente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Institucional:</strong>
                            {{ $docente->correo_institucional }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Personal:</strong>
                            {{ $docente->correo_personal }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $docente->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Etnia:</strong>
                            {{ $docente->etnia }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo 3 N:</strong>
                            <textarea >{{ $docente->titulo_3_n }}</textarea> {{-- texto area --}}
                            
                        </div>
                        <div class="form-group">
                            <strong>Titulo 4 N:</strong>
                            {{ $docente->titulo_4_n }}
                        </div>
                        <div class="form-group">
                            <strong>Doctorado:</strong>
                            {{ $docente->doctorado }}
                        </div>
                        <div class="form-group">
                            <strong>Phd:</strong>
                            {{ $docente->phd }}
                        </div>
                        <div class="form-group">
                            <strong>Discapacidad:</strong>
                            {{ $docente->discapacidad }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $docente->porcentaje }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $docente->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
