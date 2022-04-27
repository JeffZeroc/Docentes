@extends('layouts.app_admin')

@section('title','Nuevo Periodo')



@section('content')
<div class="card">
    <div class="card-header">
        <h2>Registro Docente</h2>
    </div>
    <div class="card-body">
        <div class="row pt-4">
            <div class="col-md-12">
                <form action="/home/periodo" class="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Pedro Juan Alaba Solano" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cedula">Inicio Periodo</label>
                                <input type="date" class="form-control" id="inicio_periodo"  name="inicio_periodo" placeholder="XXXXXXXXXX" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="celular">Fin Periodo</label>
                                <input type="date" class="form-control" id="fin_periodo"  name="fin_periodo" placeholder="0980XXXXXX"  required>
                            </div>
                        </div>
                        
                        
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success"> Crear</button>
                            <a href="/home/periodo" class="btn btn-secondary"> Volver</a>
                        </div>
                    </div>
        
                </form>
            </div>
        </div>
    </div>
    
    
</div>                
@endsection
