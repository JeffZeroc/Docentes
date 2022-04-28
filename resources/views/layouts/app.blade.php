<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Logo Pagina --}}
        <link rel="icon" href="{{ asset('img/distributivo.ico')}}" >    
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('logo')
        <title>@yield('title')</title>
    
        @include('partials.head_scripts')
        

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

                        <a class="nav-link disabled" href=""></a>
                        
                        <a class="nav-link disabled mt-lg-3" href="#">
                            <span> SISTEMA GESTOR DISTRIBUTIVO DE DOCENTES</span></a>

                        <a class="nav-link mt-lg-3">
                            @guest
                            @if (Route::has('login'))
                                    <a class="nav-link mt-lg-3" href="{{ route('login') }}"> {{ __('Login') }}</a>
                            @endif
                            {{-- 
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">{{ __('Register')}}</a>
                            </li>
                            @endif --}}
                            @else
                                <li class="nav dropdown no-arrow">
                                    <a class="nav dropdown-toggle" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                        <img class="img-profile rounded-circle" src="/img/docente.png" height="25" width="25">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="/home/registro">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Agregar Usuario
                                        </a>
                                        <a class="dropdown-item" href="/home/usuarios">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Lista Usuarios
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="#">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            {{ __('Cerrar Sesión') }}
                                        </a>
                                        
                                    </div>
                                </li>                            
                            @endguest
                        </a>
                      </nav>
                    


                    {{-- <nav class="navbar  navbar-expand navbar-light bg-white topbar mb-3 static-top shadow">
                        <div class="container-fluid">
                        
                            <a class="navbar-brand" href="/inicio">
                                <img src="img/utelvt.png" width="60" alt="">
                            <span>UTELVT</span></a>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                @include('partials.topbar')
                            </div>
                        </div>
                        
                    </nav> --}}
                
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
    
        </div>
        <!-- Custom scripts for all pages-->
        <script src="admin/js/sb-admin-2.min.js"></script>
    </body>
</html>
