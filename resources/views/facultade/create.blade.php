@extends('layouts.app_admin')

@section('title','Crear Facultades')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Facultad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('facultades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="nombre" >Nombre</label>
                                            <input id="nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" placeholder="Nombre" autofocus>
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
