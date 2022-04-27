@extends('layouts.app_admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Registro Docente</h2>
    </div>
    <div class="card-body">
        <div class="row pt-4">
            <div class="col-md-12">
                <form action="{{ url('home/docentes')}}" class="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Pedro Juan Alaba Solano" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cedula</label>
                                <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="XXXXXXXXXX" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Celular/Telefono</label>
                                <input type="text" class="form-control" id="celular"  name="celular" placeholder="0980XXXXXX"  required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sexo</label>
                                <select class="form-control" id="genero" name="genero">
                                    <option value="m">Maculino</option>
                                    <option value="f">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Etnia</label>
                                <select class="form-control" id="etnia" name="etnia">
                                    <option value="Montubio">Montubio</option>
                                    <option value="Indigina">Indigina</option>
                                    <option value="Afrodecendiente">Afrodecendiente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Correo Institucional</label>
                                <input type="email" class="form-control" id="correo_institucional" name="correo_institucional" placeholder="name.name@utelvt.edu.ec" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Correo Personal</label>
                                <input type="email" class="form-control" id="correo_personal" name="correo_personal" placeholder="name@example.com" required> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Dirección de Domicilio</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Titulo Tercer Nivel</label>
                                <input type="text" class="form-control" id="titulo_3_n" name="titulo_3_n" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Titulo Cuarto Nivel</label>
                                <input type="text" class="form-control" id="titulo_4_n" name="titulo_4_n" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Doctoraro</label>
                                <input type="text" class="form-control" id="doctorado" name="doctorado" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">PhD</label>
                                <input type="text" class="form-control" id="phd" name="phd" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Discapacidad</label>
                                <select class="form-control" id="dicapacidad" name="dicapacidad">
                                    <option value="false">No</option>
                                    <option value="true">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <select class="form-control" id="estado" name="estado">
                                    <option value="Activo">Activo</option>
                                    <option value="Suspendido">Suspendido</option>
                                    <option value="Retirado">Retirado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success"> Crear</button>
                            <a href="/home/docentes" class="btn btn-secondary"> Volver</a>
                        </div>
                    </div>
        
                </form>
            </div>
        </div>
    </div>
    
    
</div>

@endsection