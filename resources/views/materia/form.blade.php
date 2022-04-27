<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('carrera') }}
                    <select name="carrera_id" id="carrera_id" class="form-control">
                        @foreach ( $carreras as $carrera)
                        <option value="{{$carrera->id}}" {{ (collect(old('carrera_id'))->contains($carrera->id)) ? 'selected':'' }} >{{ $carrera->nombre}}</option>                   
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('nombre') }}
                    <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{  old('nombre') }}" placeholder="Nombre" autofocus>
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
                    <input id="codigo" type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{  old('codigo') }}" placeholder="Codigo" autofocus>
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
                    <input id="hora_a" type="text" name="hora_a" class="form-control @error('hora_a') is-invalid @enderror" value="{{  old('hora_a') }}" placeholder="Horas Autonomas" autofocus>
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
                    <input id="hora_p" type="text" name="hora_p" class="form-control @error('hora_p') is-invalid @enderror" value="{{  old('hora_p') }}" placeholder="Horas Precenciales" autofocus>
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
                    <input id="hora_d" type="text" name="hora_d" class="form-control @error('hora_d') is-invalid @enderror" value="{{  old('hora_d') }}" placeholder="Horas Docentes" autofocus>
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