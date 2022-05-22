<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Logo Pagina --}}
    <link rel="icon" href="{{ asset('img/ICOUTE.ico')}}" >    
    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <br>
    <div class="container-fluid">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="card 0-hidden border-0 shadow-lg my-1">
                        
                        <div class="card-body ">
                            <!-- Nested Row within Card Body -->
                            <div class="">
                                <br> 
                                <div class="text-center">
                                    <img src="img/SGRD.png" width="35%" alt="">
                                    <br> 
                                    <br> 
                                </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="small"  for="form-group"><b> Correo Electronico</b></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su Email Address...">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Ingrese su Email Address...">
                                    </div> --}}

                                    <div class="form-group">  
                                        <label class="small"  for="form-group"><b> Contraseña</b></label>                                                 
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Contraseña">
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label for="remember" class="custom-control-label" for="customCheck">{{ __('Recuerdame') }}</label>
                                        </div>
                                    </div> --}}
                                    <button  type="submit"  class="submit btn btn-primary btn-user btn-block">
                                        {{ __('Login') }}
                                    </button>
                                    {{-- <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a> --}}
                                </form>
                                <hr>
                                
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                        </a>
                                    @endif
                                    
                                    <div class="text-center">
                                        <a class="small" href="/">{{ __('Volver') }}</a>
                                    </div>
                                </div>
                                {{-- @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif --}}
                            </div>
                        </div>
                    </div>
        
                </div>
        
            </div>
        
        </div>

    </div>
    
</body>
</html>