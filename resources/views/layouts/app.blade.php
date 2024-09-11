<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/nav-bootom.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/session.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tape.css') }}"> <!-- شريط البريدكرمب -->
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <title>Kotaby-System</title>
</head>

<body>

    @include('layouts.partials.session')
    @include('layouts.partials.nav')
    @include('layouts.partials.bottom-nav')


    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.bootstrap-script')



    <script src="{{ asset('js/star.js') }}"></script>
    @include('layouts.partials.bootstrap-script')

</body>
