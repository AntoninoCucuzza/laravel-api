<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <header class="navbar navbar-dark sticky-top bg-base flex-md-nowrap p-2 shadow">
            <div class="">

                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">BoolPress</a> {{-- da cambiare  --}}
            </div>

            {{--  <input class="form-control form-control-dark " type="text" placeholder="Search" aria-label="Search"> --}}

            <div class="navbar-nav">
                <div class="nav-item text-nowrap ms-2">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>

                <!-- <ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('dashboard') }}">{{ __('Dashboard') }}</a>
                            <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul> -->

            </div>
        </header>

        <div class="container-fluid vh-100">
            <div class="row h-100">

                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-base navbar-dark sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item ">

                                <a class=" nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-darker shadow_drop' : '' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-chart-line"></i> Dashboard
                                </a>

                                <a class=" nav-link text-white {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-darker shadow_drop' : '' }}"
                                    href="{{ route('admin.projects.index') }}">
                                    <i class="fa-solid fa-diagram-project"></i> Projects
                                </a>

                                <a class=" nav-link text-white {{ Route::currentRouteName() == 'admin.trashed' ? 'bg-darker shadow_drop' : '' }}"
                                    href="{{ route('admin.trashed') }}">
                                    <i class="fa-solid fa-trash-can"></i> Trashed
                                </a>


                                <a class=" nav-link text-white {{ Route::currentRouteName() == 'admin.types.index' ? 'bg-darker shadow_drop' : '' }}"
                                    href="{{ route('admin.types.index') }}">
                                    <i class="fa-solid fa-list"></i> Type
                                </a>

                                <a class=" nav-link text-white {{ Route::currentRouteName() == 'admin.technologies.index' ? 'bg-darker shadow_drop' : '' }}"
                                    href="{{ route('admin.technologies.index') }}">
                                    <i class="fas fa-tag fa-fw"></i>Technology
                                </a>
                            </li>

                        </ul>


                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-custom">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>

</html>
