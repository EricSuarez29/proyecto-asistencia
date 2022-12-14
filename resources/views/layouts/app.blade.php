<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel='stylesheet' href="{{ asset('css/index.css') }}">
</head>

<body>

    @include('partials.sidebar.sidebar')

    <div class="main-content d-flex flex-column align-items-stretch" id="panel" style="min-height: 100vh">

        @include('partials.navbar')

        <div class="w-100 px-2" style="position: absolute; top: 80px; z-index: 100">
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Operación Éxitosa!</strong> {{ Session::get('success') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>

        @yield('header')


        <main class="container-fluid mt--6 d-flex flex-column align-items-stretch flex-grow-1">
            <div class="flex-grow-1">
                @yield('main')
            </div>

            @include('partials.footer')
        </main>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>