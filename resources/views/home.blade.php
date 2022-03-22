@extends('layouts.app')

@section('content')
<div class="row">
    <div id="app">        
        <div class="header">    
            <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                <div class="container">
                <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user-circle fa-lg"></i> {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('password.request') }}">
                                       Change Password
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                               
                            </li>
                        @endguest
                    </ul>                
                    
                </div>
            </nav>
    </div>
</div>
</div>
<div class="content">
            @yield('page')
</div>
<div class="dashboard">
            @yield('dashboard')
</div>


@endsection