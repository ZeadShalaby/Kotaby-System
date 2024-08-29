<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <!----===== Boxicons CSS ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <title>Dashboard Admin</title>
</head>

<body>

    @include('layouts.dashboard.partials.dashboard-left')

    {{-- <section class="home">
        <div class="text">Dashboard Sidebar</div>
    </section> --}}
    @yield('content-admin')

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
