<!DOCTYPE html>
<html class="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ URL('images/img/twitter-logo.png') }}" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('css/tweet.css') }}">

</head>


<body class="bg-white dark:bg-dim-900">

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



    @yield('content')

</body>
