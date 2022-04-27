@extends('layouts.app_admin')

@section('title','Editar Usuario')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update User</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class="row mb-3">
                                        <label for="tipo" class="col-md-4 col-form-label text-md-end">{{ __('Tipo') }}</label>
                                        <div class=" col-md-6">
                                            @if (Auth::user()->id == $user->id && $user->tipo == 'Administrador')
                                                <select id="tipo"class="form-control @error('tipo') is-invalid @enderror form-select form-select-lg" value="{{ $user->tipo }}"  name="tipo" >
                                                    <option value="Administrador" >Administrador</option>
                                                </select>
                                            @else
                                                <select id="tipo"class="form-control @error('tipo') is-invalid @enderror form-select form-select-lg" value="{{ $user->tipo }}"  name="tipo" >
                                                    <option value="Administrador" 
                                                        @if (old('tipo') == null)
                                                            @if ($user->tipo == 'Administrador')
                                                                {{ 'selected' }}
                                                                
                                                            @endif
                                                        @else
                                                            @if (old('tipo') == 'Administrador'))
                                                                {{ 'selected' }}
                                                            @endif
                                                        @endif
                                                        >Administrador</option>
                                                    <option value="Colaborador"
                                                        @if (old('tipo') == null)
                                                            @if ($user->tipo == 'Colaborador')
                                                                {{ 'selected' }}
                                                            @endif
                                                        @else
                                                            @if (old('tipo') == 'Colaborador'))
                                                                {{ 'selected' }}
                                                            @endif
                                                        @endif
                                                        >Colaborador</option>
                                                </select>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email, old('email')}}" required autocomplete="email">
                            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <a href="/home/users" class="btn btn-secondary">Volver</a>
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
