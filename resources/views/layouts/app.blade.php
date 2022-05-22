<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Logo Pagina --}}
        <link rel="icon" href="{{ asset('img/ICOUTE.ico')}}" >       
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">  
        <title>@yield('title')</title>
    
        {{-- Boostrap 5 css --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
        

    </head>
    <body >
        <div id="wrapper">
            <!-- Content Wrapper -->
            
            <div id="content-wrapper" class="d-flex flex-column ">
    
                <!-- Main Content -->
                
                <div id="content">
                    
                    <!-- Topbar -->
                    <nav class="nav nav-pills nav-fill navbar-light bg-white mb-3  shadow">
                        <a class="nav-link " aria-current="page" href="/inicio">
                            <img src="img/utelvt.png" width="60" alt="">
                        <span>UTELVT</span></a>

                        
                        
                        <a class="nav-link disabled mt-lg-3" href="#">
                            <span> SISTEMA GESTOR DISTRIBUTIVO DE DOCENTES</span></a>

                        <div class="nav-link">
                            @guest
                                @if (Route::has('login'))
                                    
                                <a class="nav-link mt-lg-2" href="{{ route('login') }}"> {{ __('Login') }}</a>
                                    
                                @endif
                                {{-- 
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('register')}}">{{ __('Register')}}</a>
                                </li>
                                @endif --}}

                                @else
                                <div class="dropdown nav-link mt-lg-2">
                                    <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-white-600 small">{{ Auth::user()->name }}</span>
                                        <img class="img-profile rounded-circle" src="/img/docente.png" height="25" width="25">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="/home/users"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Usuarios</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            {{ __('Cerrar Sesión') }}
                                        </a></li>
                                    </ul>
                                </div>
                                    
                            @endguest
                            </div>
                      </nav>
                    


                    
                
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                      @yield('content')
                    </div>
                    <!-- /.container-fluid -->
    
                </div>
                <!-- End of Main Content -->
    
    
                <!-- Footer -->
                {{-- @include('partials.footer') --}}
                <!-- End of Footer -->
    
            </div>
            <!-- End of Content Wrapper -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </div>
                </div>
                </div>
            </div>
    
        </div>
        <!-- Custom scripts for all pages-->
        {{-- Script bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
