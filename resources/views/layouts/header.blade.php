<div class="container-navbar bg-dark">

<nav class="navbar navbarLogo navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/"><img class="" src="/img/logo-nextShop-invertido.svg" width="175" alt="nextShop"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    $categories = \App\Category::orderBy('name')->get();
                    ?>
                    @foreach ($categories as $item)
                        @if ($item->visible)
                            <a class="dropdown-item" href="/products/cat/{{$item->id}}"> {{$item->name}} </a>                                    
                        @endif
                    @endforeach
                </div>
            </li>
            <li>
                <div class="navbar-form">
                    <form action="" method="get" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Busca aquí" aria-label="Search" id="texto" name="">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">Sucursales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.php">Centro de Ayuda</a>
            </li> --}}
        </ul>

<!-- Menu Laravel Login -->


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
        
        <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                </li>
                
                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                        </a>
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Mi Perfil') }}
                        </a> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

<!-- Fin Menu Laravel Login -->


<!-- Menú íconos -->

    <div class="row navbarIconosRight">
        <ul class="navbar-nav mr-auto navbarIconosList">
            <li class="nav-item navbarIconosItem">
                <a class="nav-link" href="/cart/show"><i class="fas fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item navbarIconosItem">
                <a href="#" class="nav-link"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li class="nav-item navbarIconosItem">
                <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item navbarIconosItem">
                <a href="#" class="nav-link"><i class="fab fa-twitter-square"></i></a>
            </li>
        </ul>
    </div>

    </div>
    </nav>

</div>