<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav-bootom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Login Page</title>
</head>

<body>

    <!--  Warn alert -->
    @if (Session::has('warn'))
        <div class="alert-warning">
            {{ Session::get('warn') }}
        </div>
        </div>
    @endif
    <!-- success alert -->
    @if (Session::has('success'))
        <div class="alert-success">
            {{ Session::get('success') }}
        </div>
        </div>
    @endif
    <!-- error alert -->
    @if (Session::has('error'))
        <div class="alert-error">
            {{ Session::get('error') }}
        </div>
        </div>
    @endif

    <!-- delete alert -->
    @if (Session::has('delete'))
        <div class="alert-delete">
            {{ Session::get('delete') }}
        </div>
        </div>
    @endif

    <!-- explore alert -->
    @if (Session::has('explore'))
        <div class="alert-explore">
            {{ Session::get('explore') }}
        </div>
        </div>
    @endif


    @include('layouts.partials.nav')
    @include('layouts.partials.bottom-nav')

    @yield('content')
    @include('layouts.partials.footer')
</body>
