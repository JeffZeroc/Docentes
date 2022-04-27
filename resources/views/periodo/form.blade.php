<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
                
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nombre" >Nombre</label>
                    <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $periodo->nombre }}" placeholder="Nombre" autofocus>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inicio_periodo" >Periodo Inicio</label>
                    <input id="inicio_periodo" type="date" name="inicio_periodo" class="form-control @error('inicio_periodo') is-invalid @enderror" value="{{ $periodo->inicio_periodo }}"  autofocus>
                    @error('inicio_periodo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="fin_periodo" >Fin Periodo</label>
                    <input id="fin_periodo" type="date" name="fin_periodo" class="form-control @error('fin_periodo') is-invalid @enderror" value="{{ $periodo->fin_periodo }}"  autofocus>
                    @error('fin_periodo')
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
            <a href="/home/periodos" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
        
    </div>
</div>