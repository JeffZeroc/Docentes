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
                                                {{ Form::label('carrera') }}
                                                {{-- {{ Form::select('carrera_id',$carreras, $materia->carrera_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : '')]) }} --}}
                                                <select name="carrera_id" id="carrera_id" class="form-select form-control @error('carrera_id') is-invalid @enderror">
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
                                                            {{ $carrera->nombre}}
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
                                                {{ Form::label('nombre') }}
                                                <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{  $materia->nombre }}" placeholder="Nombre" autofocus>
                                                @error('nombre')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {{ Form::label('codigo') }}
                                                <input id="codigo" type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{  $materia->codigo }}" placeholder="Codigo" autofocus>
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
                                                {{ Form::label('Horas Autonomas') }}
                                                <input id="hora_a" type="text" name="hora_a" class="form-control @error('hora_a') is-invalid @enderror" value="{{  $materia->hora_a }}" placeholder="Horas Autonomas" autofocus>
                                                @error('hora_a')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {{ Form::label('Horas Precenciales') }}
                                                <input id="hora_p" type="text" name="hora_p" class="form-control @error('hora_p') is-invalid @enderror" value="{{  $materia->hora_p }}" placeholder="Horas Precenciales" autofocus>
                                                @error('hora_p')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {{ Form::label('Horas Docentes') }}
                                                <input id="hora_d" type="text" name="hora_d" class="form-control @error('hora_d') is-invalid @enderror" value="{{  $materia->hora_d }}" placeholder="Horas Docentes" autofocus>
                                                @error('hora_d')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
