@extends('layouts.app')

@section('content')

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container" style="">
            <a class="navbar-brand" href="{{ url('/') }}" style="text-decoration: none;">
                {{ config('app.name', 'Laravel') }}
            </a>
            <a class="navbar-brand" href="{{ url('admin/home') }}" style="font-size:15px; text-decoration: none; padding-left:100px; padding-bottom:5px;">
                <p>Dashboard</p>
            </a>
            <a class="navbar-brand" href="{{ url('admin/user') }}" style="font-size:15px; text-decoration: underline; padding-left:40px; padding-bottom:5px;">
                <p>User</p>
            </a>
            <a class="navbar-brand" href="" style="font-size:15px; text-decoration: none; padding-left:40px; padding-bottom:5px;">
                <p>Info Pendaftaran</p>
            </a>
            <a class="navbar-brand" href="" style="font-size:15px; text-decoration: none; padding-left:40px; padding-bottom:5px;">
                <p>Info Reservasi</p>
            </a>
            <a class="navbar-brand" href="" style="font-size:15px; text-decoration: none; padding-left:40px; padding-bottom:5px;">
                <p>Kontak</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
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
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        </div>
    </nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Admin!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
