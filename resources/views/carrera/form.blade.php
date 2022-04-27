<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Facultad') }}
                    <select name="facultad_id" id="facultad_id" class="form-control">
                        @foreach ( $facultades as $facultad)
                        <option value="{{$facultad->id}}" class="form-control">{{ $facultad->nombre}}</option>                   
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    {{ Form::label('nombre') }}
                    <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $carrera->nombre }}" placeholder="Nombre" autofocus>
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
                    <input id="duracion" type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ $carrera->duracion }}" placeholder="Duración" autofocus>
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
                    <select name="estado" id="estado" class="form-control">
                        
                        <option value="Activo" class="form-control">Activo</option>      
                        <option value="Suspendido" class="form-control">Suspendido</option>                   
                        
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