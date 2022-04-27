
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    
    
    <link href="{{ asset('css/estilo_pagina.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet"> --}}
    {{-- Boostrap 5 css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Icons css --}}
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div>
            @guest
                @if (Route::has('login'))
                    <li class="nav">
                        <a class="nav-link" href="{{ route('login') }}"> {{ __('Login') }}</a>
                    </li>
                @endif
                {{-- 
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">{{ __('Register')}}</a>
                </li>
                @endif --}}

                @else
                <div class="dropdown dropdown-color:white">
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
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            
            <div> 
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">SGDD </span> </a>
                <div class="nav_list">
                    <a href="/home/inicio" class=" nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a> 
                    <a href="/home/docente-materias" class="nav_link "> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Distributivo</span> </a> 
                    <a href="/home/docentes" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Docentes</span> </a> 
                    <a href="/home/materias" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Materias</span> </a> 
                    <a href="/home/carreras" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Carreras</span> </a> 
                    <a href="/home/periodos"class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Periodos</span> </a> </div>
                    <a href="/home/facultades"class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Facultades</span> </a> </div>
                    
            </div>
            
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div>
    <!--Container Main end-->
    
    <!--Container Main end-->


    {{-- Iconos "<i>" --}}
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> 
    {{-- Script bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" ></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
        
    {{-- Query Js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    
    {{-- Scrip pagian --}}
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
            })
            }
            }

            showNavbar('header-toggle','nav-bar','body-pd','header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink(){
            if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
            }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
            });
    </script>
</body>



</html>