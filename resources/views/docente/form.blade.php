<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Nombres') }}
                    <input id="nombres" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{  old('nombre') }}" placeholder="Nombres" autofocus>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Apellidos') }}
                    <input id="apellidos" type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{  old('apellidos') }}" placeholder="Apellidos" autofocus>
                    @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('cedula') }}
                    <input id="cedula" type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror" value="{{  old('cedula') }}" placeholder="Cedula" autofocus>
                    @error('cedula')
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
                    {{ Form::label('celular') }}
                    <input id="celular" type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{  old('celular') }}" placeholder="Celular" autofocus>
                    @error('celular')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Sexo') }}
                    <select name="sexo" id="sexo" class="form-control "  >
                                                    
                        <option value="Masculino" @if (old('sexo') == "Activo") {{ 'selected' }} @endif >Masculino</option>      
                        <option value="Femenino" @if (old('sexo') == "Suspendido") {{ 'selected' }} @endif >Femenino</option>                   
                        
                    </select>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('etnia') }}
                    <select name="etnia" id="etnia" class="form-control "  >                          
                        <option value="Blanco" @if (old('etnia') == "Blanco") {{ 'selected' }} @endif >Blanco</option>      
                        <option value="Mestizo" @if (old('etnia') == "Mestizo") {{ 'selected' }} @endif >Mestizo</option>
                        <option value="Afrodecendiente" @if (old('etnia') == "Afrodecendiente") {{ 'selected' }} @endif >Afrodecendiente</option>
                        <option value="Montubio" @if (old('etnia') == "Montubio") {{ 'selected' }} @endif >Montubio</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    
                    {{ Form::label('correo_institucional') }}
                    <input id="correo_institucional" type="text" name="correo_institucional" class="form-control @error('correo_institucional') is-invalid @enderror" value="{{  old('correo_institucional') }}" placeholder="Example@utelvt.edu.ec" autofocus>
                    @error('correo_institucional')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('correo_personal') }}
                    <input id="correo_personal" type="text" name="correo_personal" class="form-control @error('correo_personal') is-invalid @enderror" value="{{  old('correo_personal') }}" placeholder="Example@gmail.com" autofocus>
                    @error('correo_personal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('direccion de domicilio') }}
                    <input id="direccion" type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{  old('direccion') }}" placeholder="Dirección de Domicilio" autofocus>
                    @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('titulos 3 Nivel') }}
                    <input id="titulo_3_n" type="text" name="titulo_3_n" class="form-control @error('titulo_3_n') is-invalid @enderror" value="{{  old('titulo_3_n') }}" placeholder="Titulos" autofocus>
                    @error('titulo_3_n')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('titulos 4 nivel') }}
                    <input id="titulo_4_n" type="text" name="titulo_4_n" class="form-control @error('titulo_4_n') is-invalid @enderror" value="{{  old('titulo_4_n') }}" placeholder="Titulos" autofocus>
                    @error('titulo_4_n')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('doctorado') }}
                    <input id="doctorado" type="text" name="doctorado" class="form-control @error('doctorado') is-invalid @enderror" value="{{  old('doctorado') }}" placeholder="Doctorado" autofocus>
                    @error('doctorado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('phd') }}
                    <input id="phd" type="text" name="phd" class="form-control @error('phd') is-invalid @enderror" value="{{  old('phd') }}" placeholder="PHD" autofocus>
                    @error('phd')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group ">
                    {{ Form::label('discapacidad') }}
                    <select name="discapacidad" id="discapacidad" class="form-control" onchange="showDiv(this)">                          
                        <option value="No" @if (old('discapacidad') == "No") {{ 'selected' }} @endif >No</option>      
                        <option value="Si" @if (old('discapacidad') == "Si") {{ 'selected' }} @endif >SI</option>
                    </select>
                </div>
            </div>
            <div class="col-md-1" id="text_porcentaje" style="display: none;">
                <div class="form-group" >
                    {{ Form::label('Porcentaje') }}
                    <input id="porcentaje" type="text" name="porcentaje" class="form-control @error('porcentaje') is-invalid @enderror" value="{{  old('porcentaje') }}" placeholder="%" autofocus>
                    @error('porcentaje')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-1" id="espacio" >

            </div>
            <div class="col-md-2" >

            </div>
                     
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('estado') }}
                    <select name="estado" id="estado" class="form-control "  >                      
                        <option value="Activo" @if (old('estado') == "Activo") {{ 'selected' }} @endif >Activo</option>      
                        <option value="Suspendido" @if (old('estado') == "Suspendido") {{ 'selected' }} @endif >Suspendido</option>                   
                        
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row box-footer mt20">
        <div class="col-md-12">
            <a href="/home/docentes" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Guardar</button>  
        </div>
    </div>
</div>
<script type="text/javascript">
    function showDiv(select){
       if(select.value=="Si"){
        document.getElementById('text_porcentaje').style.display = "block";
        document.getElementById('espacio').style.display = "none";
       } else{
        document.getElementById('text_porcentaje').style.display = "none";
        document.getElementById('espacio').style.display = "block";
       }
    } 
</script>

