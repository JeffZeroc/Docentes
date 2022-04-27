

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

    
