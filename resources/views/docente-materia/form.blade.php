<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label> Docente</label>
                    <select name="docente_id" id="docente_id" class="form-select form-control @error('docente_id') is-invalid @enderror">
                        @foreach ( $docentes as $docente)
                            <option value="{{$docente->id}}" 
                                @if (old('docente_id') == null)
                                    @if ($docente->id == $docenteMateria->docente_id)
                                        {{ 'selected' }}
                                    @endif
                                @else
                                    @if ($docente->id == old('docente_id'))
                                        {{ 'selected' }}
                                    @endif
                                @endif>
                                {{ $docente->nombres}} {{ $docente->apellidos}}
                            </option>
                        @endforeach
                    </select>
                    @error('docente_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label> Periodo Académico</label>
                    <select name="periodo_id" id="periodo_id" class="form-select form-control @error('materia_id') is-invalid @enderror">
                        @foreach ( $periodos as $periodo)
                            <option value="{{$periodo->id}}" 
                                @if (old('periodo_id') == null)
                                    @if ($periodo->id == $docenteMateria->periodo_id)
                                        {{ 'selected' }}
                                    @endif
                                @else
                                    @if ($periodo->id == old('periodo_id'))
                                        {{ 'selected' }}
                                    @endif
                                @endif>
                                {{ $periodo->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('periodo_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label> Materia</label>
                    <select name="materia_id" id="materia_id" class="form-select form-control @error('materia_id') is-invalid @enderror">
                        @foreach ( $materias as $materia)
                            <option value="{{$materia->id}}" 
                                @if (old('materia_id') == null)
                                    @if ($materia->id == $docenteMateria->materia_id)
                                        {{ 'selected' }}
                                    @endif
                                @else
                                    @if ($materia->id == old('materia_id'))
                                        {{ 'selected' }}
                                    @endif
                                @endif>
                                {{ $materia->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('materia_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row box-footer mt20 ">
        <div class="col-md-12">
            <a href="/home/docente-materias" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        
    </div>
</div>