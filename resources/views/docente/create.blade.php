
@extends('layouts.app_admin')

@section('title','Nuevo Docente')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Docente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('docentes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                            
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nombres </label> 
                                                <input id="nombres" type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{  old('nombres') }}" placeholder="Nombres" autofocus>
                                                @error('nombres')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Apellidos</label>
                                                <input id="apellidos" type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{  old('apellidos') }}" placeholder="Apellidos" autofocus>
                                                @error('apellidos')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cedula </label>
                                                <input id="cedula" type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror" value="{{  old('cedula') }}" placeholder="Cedula de Identidad" autofocus>
                                                @error('cedula')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Celular</label>
                                                <input id="celular" type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{  old('celular') }}" placeholder="Número Telefonico" autofocus>
                                                @error('celular')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3" >
                                            <div class="form-group" >
                                                <label> Fecha Nacimiento</label>
                                                <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento') }}"  autofocus>
                                                @error('fecha_nacimiento')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Género </label>
                                                <select name="sexo" id="sexo" class="form-select form-control "  >
                                                                                
                                                    <option value="Hombre" @if (old('sexo') == "Hombre") {{ 'selected' }} @endif >Hombre</option>      
                                                    <option value="Mujer" @if (old('sexo') == "Mujer") {{ 'selected' }} @endif >Mujer</option>                   
                                                    
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Etnia</label>
                                                <select name="etnia" id="etnia" class="form-select orm-control "  >                          
                                                    <option value="Mestizo" @if (old('etnia') == "Mestizo") {{ 'selected' }} @endif >Mestizo</option>      
                                                    <option value="Montubio" @if (old('etnia') == "Montubio") {{ 'selected' }} @endif >Montubio</option>
                                                    <option value="AfroEcuatoriano" @if (old('etnia') == "AfroEcuatoriano") {{ 'selected' }} @endif >AfroEcuatoriano</option>
                                                    <option value="Indígena" @if (old('etnia') == "Indígena") {{ 'selected' }} @endif >Indígena</option>
                                                    <option value="Blanco" @if (old('etnia') == "Blanco") {{ 'selected' }} @endif >Blanco</option>
                                                    <option value="Otro" @if (old('etnia') == "Otro") {{ 'selected' }} @endif >Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Dedicación </label>
                                                <select name="dedicacion" id="dedicacion" class="form-select form-control "  >
                                                                                
                                                    <option value="TC" @if (old('dedicacion') == "TC") {{ 'selected' }} @endif >Tiempo Completo</option>      
                                                    <option value="MT" @if (old('dedicacion') == "MT") {{ 'selected' }} @endif >Medio Tiempo</option>         
                                                    <option value="TP" @if (old('dedicacion') == "TP") {{ 'selected' }} @endif >Tiempo Parcial</option>                
                                                    
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                
                                                <label> Correo Institucional</label>
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
                                                <label>Correo Personal </label>
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Dirección Domicilio</label>
                                                <input id="direccion" type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{  old('direccion') }}" placeholder="Dirección de Domicilio" autofocus>
                                                @error('direccion')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Relación Dependencia</label>
                                                <select name="relacion_dependencia" id="relacion_dependencia" class="form-select form-control" >       
                                                    <option value="Nombramiento" @if (old('relacion_dependencia') == "Nombramiento") {{ 'selected' }} @endif >Nombramiento</option>      
                                                    <option value="Contrato" @if (old('relacion_dependencia') == "Contrato") {{ 'selected' }} @endif >Contrato</option>                   
                                                </select>
                                            </div>
                                        </div>
                                        
                                        @if (old('relacion_dependencia') != null)
                                            @if (old('relacion_dependencia') == 'Nombramiento' )
                                                <div class="col-md-3" id="rd_div2" style="display: block;">
                                                    <div class="form-group" >
                                                        <label> Detalle</label>
                                                        <select name="relacion_dependencia2" id="relacion_dependencia2" class="form-select form-control ">                      
                                                            <option value="Titular" @if (old('relacion_dependencia2') == "Titular") {{ 'selected' }} @endif >Titular</option>      
                                                            <option value="Auxiliar 1" @if (old('relacion_dependencia2') == "Auxiliar 1") {{ 'selected' }} @endif >Auxiliar 1</option>                   
                                                            <option value="Auxiliar 2" @if (old('relacion_dependencia2') == "Auxiliar 2") {{ 'selected' }} @endif >Auxiliar 2</option>                   
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3" id="rd_div" style="display: none;">
                                                    <div class="form-group" >
                                                        <label >Detalle</label>
                                                        <select name="relacion_dependencia3" id="relacion_dependencia3" class="form-select form-control "  >                      
                                                            <option value="Ocacional" @if (old('relacion_dependencia3') == "Ocacional") {{ 'selected' }} @endif >Ocacional</option>      
                                                            <option value="Individual" @if (old('relacion_dependencia3') == "Individual") {{ 'selected' }} @endif >Individual</option>                   
                                                            <option value="Honorario" @if (old('relacion_dependencia3') == "Honorario") {{ 'selected' }} @endif >Honorario</option>                   
                                                        </select>
                                                    </div>
                                                </div> 
                                                                                            
                                            @else

                                                <div class="col-md-3" id="rd_div2" style="display: none;">
                                                    <div class="form-group" >
                                                        <label> Detalle</label>
                                                        <select name="relacion_dependencia2" id="relacion_dependencia2" class="form-select form-control ">                      
                                                            <option value="Titular" @if (old('relacion_dependencia2') == "Titular") {{ 'selected' }} @endif >Titular</option>      
                                                            <option value="Auxiliar 1" @if (old('relacion_dependencia2') == "Auxiliar 1") {{ 'selected' }} @endif >Auxiliar 1</option>                   
                                                            <option value="Auxiliar 2" @if (old('relacion_dependencia2') == "Auxiliar 2") {{ 'selected' }} @endif >Auxiliar 2</option>                   
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3" id="rd_div" style="display: block;">
                                                    <div class="form-group" >
                                                        <label >Detalle</label>
                                                        <select name="relacion_dependencia3" id="relacion_dependencia3" class="form-select form-control "  >                      
                                                            <option value="Ocacional" @if (old('relacion_dependencia3') == "Ocacional") {{ 'selected' }} @endif >Ocacional</option>      
                                                            <option value="Individual" @if (old('relacion_dependencia3') == "Individual") {{ 'selected' }} @endif >Individual</option>                   
                                                            <option value="Honorario" @if (old('relacion_dependencia3') == "Honorario") {{ 'selected' }} @endif >Honorario</option>                   
                                                        </select>
                                                    </div>
                                                </div> 
                                            @endif
                                            

                                            
                                        @else
                                            <div class="col-md-3" id="rd_div2" style="display: block;">
                                                <div class="form-group" >
                                                    <label> Detalle</label>
                                                    <select name="relacion_dependencia2" id="relacion_dependencia2" class="form-select form-control ">                      
                                                        <option value="Titular" @if (old('relacion_dependencia2') == "Titular") {{ 'selected' }} @endif >Titular</option>      
                                                        <option value="Auxiliar 1" @if (old('relacion_dependencia2') == "Auxiliar 1") {{ 'selected' }} @endif >Auxiliar 1</option>                   
                                                        <option value="Auxiliar 2" @if (old('relacion_dependencia2') == "Auxiliar 2") {{ 'selected' }} @endif >Auxiliar 2</option>                   
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3" id="rd_div" style="display: none;">
                                                <div class="form-group" >
                                                    <label >Detalle</label>
                                                    <select name="relacion_dependencia3" id="relacion_dependencia3" class="form-select form-control "  >                      
                                                        <option value="Ocacional" @if (old('relacion_dependencia3') == "Ocacional") {{ 'selected' }} @endif >Ocacional</option>      
                                                        <option value="Individual" @if (old('relacion_dependencia3') == "Individual") {{ 'selected' }} @endif >Individual</option>                   
                                                        <option value="Honorario" @if (old('relacion_dependencia3') == "Honorario") {{ 'selected' }} @endif >Honorario</option>                   
                                                    </select>
                                                </div>
                                            </div> 
                                        @endif
                                            
                                        
                                            
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Titulos 3 nivel</label>
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
                                                <label> Titulos 4 nivel</label>
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
                                                <label> Doctorado</label>
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
                                                <label> PHD</label>
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
                                                <label> Discapacidad</label>
                                                <select name="discapacidad" id="discapacidad" class="form-select form-control" onchange="showDiv(this)">                          
                                                    <option value="No" @if (old('discapacidad') == "No") {{ 'selected' }} @endif >No</option>      
                                                    <option value="Si" @if (old('discapacidad') == "Si") {{ 'selected' }} @endif >SI</option>
                                                </select>
                                                @error('discapacidad')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @if (old('discapacidad') == "Si")
                                            <div class="col-md-1" id="text_porcentaje" style="display: block;">
                                                <div class="form-group" >
                                                    <label> Porcentaje</label>
                                                    <input id="porcentaje" type="text" name="porcentaje" class="form-control @error('porcentaje') is-invalid @enderror" value="{{ old('porcentaje') }}" placeholder="%" autofocus>
                                                    @error('porcentaje')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-1" id="espacio" style="display: none;">
                            
                                            </div>
                                        @else
                                            <div class="col-md-1" id="text_porcentaje" style="display: none;">
                                                <div class="form-group" >
                                                    <label> Porcentaje</label>
                                                    <input id="porcentaje" type="text" name="porcentaje" class="form-control @error('porcentaje') is-invalid @enderror" value="{{ $docente->porcentaje }}" placeholder="%" autofocus>
                                                    @error('porcentaje')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-1" id="espacio" style="display: block;">
                            
                                            </div>
                                        @endif
                                        <div class="col-md-2" >
                            
                                        </div>
                                                 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Estado</label>
                                                <select name="estado" id="estado" class="form-select form-control "  onchange="showfecha(this)">                      
                                                    <option value="Activo" @if (old('estado') == "Activo") {{ 'selected' }} @endif >Activo</option>      
                                                    <option value="Suspendido" @if (old('estado') == "Suspendido") {{ 'selected' }} @endif >Suspendido</option>                   
                                                </select>
                                            </div>
                                        </div>
                                        @if (old('estado') == "Suspendido")
                                            <div class="col-md-3" id="date_suspendido" style="display: block;">
                                                <div class="form-group" >
                                                    <label> Fecha Suspención</label>
                                                    <input id="fecha_suspencion" type="date" name="fecha_suspencion" class="form-control @error('fecha_suspencion') is-invalid @enderror" value="{{ old('fecha_suspencion') }}"  autofocus>
                                                    @error('fecha_suspencion')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                        @else
                                            <div class="col-md-3" id="date_suspendido" style="display: none;">
                                                <div class="form-group" >
                                                    <label> Fecha Suspención</label>
                                                    <input id="fecha_suspencion" type="date" name="fecha_suspencion" class="form-control @error('fecha_suspencion') is-invalid @enderror" value="{{ $docente->fecha_suspencion }}"  autofocus>
                                                    @error('fecha_suspencion')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                
                                <div class="row box-footer mt20">
                                    <div class="col-md-12">
                                        <a href="/home/docentes" class="btn btn-secondary">Volver</a>
                                        <button type="submit" class="btn btn-primary">Guardar</button>  
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $rd = document.querySelector("#relacion_dependencia")

                                function showDiv(select){
                                   if(select.value=="Si"){
                                    document.getElementById('text_porcentaje').style.display = "block";
                                    document.getElementById('espacio').style.display = "none";
                                   } else{
                                    document.getElementById('text_porcentaje').style.display = "none";
                                    document.getElementById('espacio').style.display = "block";
                                   }
                                } 
                                function showfecha(select){
                                   if(select.value=="Suspendido"){
                                    document.getElementById('date_suspendido').style.display = "block";
                                   } else{
                                    document.getElementById('date_suspendido').style.display = "none";
                                   }
                                } 
                                
                                
                                // const opcionCambiada = () => {
                                function Opcioncambiada(){
                                    // console.log($rd.value);
                                    if($rd.value=="Contrato"){
                                        document.getElementById('rd_div').style.display = "block";
                                        document.getElementById('rd_div2').style.display = "none";
                                    } else{
                                        document.getElementById('rd_div').style.display = "none";
                                        document.getElementById('rd_div2').style.display = "block";
                                    
                                    }
                                    
                                        
                                };

                                $rd.addEventListener("change", Opcioncambiada);
                                
                            </script>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

