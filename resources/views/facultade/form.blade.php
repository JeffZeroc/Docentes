<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="col-md-6">
                <label for="nombre" >Nombre</label>
                <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $facultade->nombre }}" placeholder="Nombre" autofocus>
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror   
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <a href="/home/facultades" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>