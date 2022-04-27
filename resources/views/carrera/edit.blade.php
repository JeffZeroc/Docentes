@extends('layouts.app_admin')

@section('title','Editar Carrera')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Carrera</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('carreras.update', $carrera->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {{ Form::label('Facultad') }}
                                                {{-- {{ Form::select('facultad_id',$facultades, $carrera->facultad_id, ['class' => 'form-control' . ($errors->has('facultad_id') ? ' is-invalid' : '')]) }} --}}
                                                <select name="facultad_id" id="facultad_id" class="form-select form-control @error('facultad_id') is-invalid @enderror">
                                                    @foreach ( $facultades as $facultad)
                                                        <option value="{{$facultad->id}}" 
                                                            @if (old('facultad_id') == null)
                                                                @if ($facultad->id == $carrera->facultad_id)
                                                                    {{ 'selected' }}
                                                                @endif
                                                            @else
                                                                @if ($facultad->id == old('facultad_id'))
                                                                    {{ 'selected' }}
                                                                @endif
                                                            @endif>
                                                            {{ $facultad->nombre}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                {{-- <select name="facultad_id" id="facultad_id" class="form-control @error('facultad_id') is-invalid @enderror">
                                                    @foreach ( $facultades as $facultad)
                                                    <option value="{{$facultad->id}}" {{ (collect(old('facultad_id'))->contains($facultad->id)) ? 'selected':'' }} >{{ $facultad->nombre}}</option>                   
                                                    @endforeach
                                                </select> --}}
                                                @error('facultad_id')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {{ Form::label('nombre') }}
                                                <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{  $carrera->nombre}}" placeholder="Nombre" autofocus>
                                                @error('nombre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{ Form::label('codigo') }}
                                                <input id="codigo" type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ $carrera->codigo }}" placeholder="Codigo" autofocus>
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
                                                {{ Form::label('Duración en Semestres') }}
                                                <input id="duracion" type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ $carrera->duracion}}" placeholder="Duración" autofocus>
                                                @error('duracion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4">
                            
                                        </div> --}}
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {{ Form::label('estado') }}
                                                <select name="estado" id="estado" class="form-control "  >                      
                                                    <option value="Activo" 
                                                        @if (old('estado') == null)
                                                            @if ($carrera->estado == 'Activo')
                                                                {{ 'selected' }}
                                                            @endif
                                                        @else
                                                            @if (old('estado') == 'Activo'))
                                                                {{ 'selected' }}
                                                            @endif
                                                        @endif>
                                                        Activo
                                                    </option>  
                                                    <option value="Suspendido" 
                                                        @if (old('estado') == null)
                                                            @if ($carrera->estado == 'Suspendido')
                                                                {{ 'selected' }}
                                                            @endif
                                                        @else
                                                            @if (old('estado') == 'Suspendido'))
                                                                {{ 'selected' }}
                                                            @endif
                                                        @endif>
                                                        Suspendido
                                                    </option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row box-footer mt20 ">
                                    <div class="col-md-12">
                                        <a href="/home/carreras" class="btn btn-secondary">Volver</a>
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