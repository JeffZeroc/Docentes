<!-- Sidebar Toggle (Topbar) -->


<!-- Topbar Search -->

<!-- Topbar Navbar -->

<div class="topbar-divider d-none d-sm-block"></div>

{{-- User Informatio --}}
@guest
    @if (Route::has('login'))
        <li class="nav">
            <a class="nav-link" href="{{ route('login') }}"> {{ __('Login') }}</a>
        </li>
    @endif
@else
    <!-- Large button groups (default and split) -->
    <div class="btn-group">
        <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            <span class="small">{{ Auth::user()->name }}</span>
            <img class="img-profile rounded-circle" src="/img/docente.png" height="25" width="25">
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuButton1"
            data-bs-display="static" aria-expanded="false">
            <li><a class="dropdown-item" href="/home/users"><i class="bx bx-user-circle"></i>
                    <span class="small">Usuarios</span></a></li>

            <div class="dropdown-divider"></div>

            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                    <i class="bx bx-log-in"></i>
                    <span class="small">Cerrar Sesión</span>
                </a></li>
        </ul>
    </div>

@endguest
