<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Titulo --}}
    <title>@yield('title')</title>

    

    {{-- Icono --}}
    <link rel="icon" href="{{ asset('img/ICOUTE.ico') }}">

    {{-- Estilos de layout --}}
    <link href="{{ asset('css/estilo_pagina.css') }}" rel="stylesheet">

    {{-- Boostrap 5 css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    {{-- Icons css --}}
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">

    {{-- DataTable --}}
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="" rel="stylesheet">



    {{-- Otros Estilos --}}
    @yield('css')

</head>

<body id="body-pd">
    <header class="header static" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        @include('partials.topbar')
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="/home/inicio" class="nav_logo"><img src="{{ asset('img/srgd.png') }}" width="25"> <span
                        class="nav_logo-name">SGRD </span> </a>

                <div class="nav_list">
                    <a href="/home/inicio" class="nav_link {{ request()->segment(2) == 'inicio' ? 'active' : '' }}"
                        class=" nav_link "> <i class='bx bx-home nav_icon'></i> <span
                            class="nav_name">Inicio</span> </a>
                    <hr class="sidebar-divider" style="color: black;">
                    <a href="/home/docente-materias"
                        class="nav_link {{ request()->segment(2) == 'docente-materias' ? 'active' : '' }}"> <i
                            class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Distributivo</span> </a>
                    <a href="/home/docentes"
                        class="nav_link {{ request()->segment(2) == 'docentes' ? 'active' : '' }}"> <i
                            class='bx bx-user nav_icon'></i> <span class="nav_name">Docentes</span> </a>
                    <a href="/home/materias"
                        class="nav_link {{ request()->segment(2) == 'materias' ? 'active' : '' }}"> <i
                            class='bx bx-book-open nav_icon'></i> <span class="nav_name">Materias</span> </a>
                    <a href="/home/carreras" f
                        class="nav_link {{ request()->segment(2) == 'carreras' ? 'active' : '' }}"> <i
                            class='bx bx-wallet nav_icon'></i> <span class="nav_name">Carreras</span> </a>
                    <a href="/home/periodos"
                        class="nav_link {{ request()->segment(2) == 'periodos' ? 'active' : '' }}"> <i
                            class='bx bx-calendar nav_icon'></i> <span class="nav_name">Periodos</span> </a>
                </div>
                <a href="/home/facultades"
                    class="nav_link {{ request()->segment(2) == 'facultades' ? 'active' : '' }}"> <i
                        class='bx bx-building-house nav_icon'></i> <span class="nav_name">Facultades</span> </a>
            </div>

    </div>

    </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <br>
        <br>
        <br>
        @include('components.flash_alerts')
        @yield('content')
    </div>

    <!--Container Main end-->

    <!--Container Main end-->

    <!--Modal-->
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
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar
                        Sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>


{{-- Iconos "<i>" --}}
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

{{-- Script bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


{{-- Data Tables --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


<script src=""></script>

{{-- Scrip pagina --}}
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
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

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))
        // Your code to run since DOM is loaded and ready
    });
</script>
<script>
    $(document).ready(function() {

        $('#example').DataTable({
            scrollY: '250px',
            scrollCollapse: true,
            paging: true,
            dom: 'Bfrtip',
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            buttons: [, 'excel', 'pdf',
                //Espacio
                {
                    extend: 'spacer',
                    style: '',
                    text: ''
                },
                //Fin Espacio
                'pageLength'
            ]

        });
    });
</script>
@yield('js')



</html>
