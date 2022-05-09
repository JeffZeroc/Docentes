@extends('layouts.app_admin')

@section('title','Editar Materias')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Materia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materias.update', $materia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Carrera</label>
                                                <select name="carrera_id" id="carrera_id" class="form-select form-control @error('carrera_id') is-invalid @enderror " >
                                                    @foreach ( $carreras as $carrera)
                                                        <option value="{{$carrera->id}}" 
                                                            @if (old('carrera_id') == null)
                                                                @if ($carrera->id == $materia->carrera_id)
                                                                    {{ 'selected' }}
                                                                @endif
                                                            @else
                                                                @if ($carrera->id == old('carrera_id'))
                                                                    {{ 'selected' }}
                                                                @endif
                                                            @endif>
                                                            {{ $carrera->duracion}}
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
                                                <label> Nombre</label>
                                                <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{  $materia->nombre }}" placeholder="Nombre Asignatura" autofocus>
                                                @error('nombre')
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
                                                <label> Código</label>
                                                <input id="codigo" type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{  $materia->codigo }}" placeholder="Código Asignatura" autofocus>
                                                @error('codigo')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Horas Autonomas</label>
                                                <input id="hora_a" type="text" name="hora_a" class="form-control @error('hora_a') is-invalid @enderror" value="{{  $materia->hora_a }}" placeholder="1-70" autofocus>
                                                @error('hora_a')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Horas Presenciales</label>
                                                <input id="hora_p" type="text" name="hora_p" class="form-control @error('hora_p') is-invalid @enderror" value="{{  $materia->hora_p }}" placeholder="1-70" autofocus>
                                                @error('hora_p')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row box-footer mt20">
                                    <div class="col-md-12">
                                        <a href="/home/materias" class="btn btn-secondary">Volver</a>
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
