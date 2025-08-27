<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('title')
        <title>@yield('title') - {{ config('app.name', 'DLRG Kindersucharmband') }}</title>
    @else
        <title>{{ config('app.name', 'DLRG Kindersucharmband') }}</title>
    @endif

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('scripts')

</head>
<body>
<div id="app">
    <div id="page-container">
        <div id="content-wrap">
            <!-- Navigation -->
            @section('nav')
                <header>
                    @include('layout.nav')
                </header>
            @show
            <main class="py-4">
                <div class="container">
                    <div class="row">
                        @hasSection('content')
                            <div class="col-md-2 border-right secnav">
                                @yield('secnav')
                            </div>
                        @endif
                        <div class="col-md-8">
                            @if(session('success'))
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <i class="fas fa-check-circle me-2"></i>
                                    <div>{{ session('success') }}</div>
                                </div>
                            @endif
                            @if (isset($error))
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <i class="fas fa-exclamation-circle me-2"></i>
                                    <div>{{ $error }}</div>
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <i class="fas fa-exclamation-circle me-2"></i>
                                    <div>{{ session('error') }}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        @hasSection('content')
                            <div class="col-md-2 border-right secnav">
                                @yield('secnav')
                            </div>
                        @endif
                        <div @class([
                            'mb-3',
                            'col-md-12' => $__env->yieldContent('fullcontent'),
                            'col-md-8' => $__env->yieldContent('content'),
                            ])>
                            @yield('fullcontent')
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="footer">
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            @include('layout.footer')
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
</body>
</html>
