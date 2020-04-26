<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .container-fluid {
            margin-top: 70px;
        }
    </style>    

    <title>Sunflower | @yield('title')</title>
    @yield('custom-css')
  </head>
  <body>
    @include('backend.layouts.partials.navbar')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-12">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('custom-scripts')
  </body>
</html>