@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <!----- content ----->
    <link rel="stylesheet" href="{{ asset('css/admin-home.css') }}">
    <header>
        <nav>
            <ul>
                <li><a href="#home">@lang('kotaby.home')</a></li>
                <li><a href="#features">@lang('kotaby.features')</a></li>
                <li><a href="#contact">@lang('kotaby.contact')</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>@lang('kotaby.welcome')</h1>
            <p>@lang('kotaby.solution')</p>
            <a href="#contact" class="btn">@lang('kotaby.get_started')</a>
        </div>
    </section>

    <section id="features" class="features">
        <h2>@lang('kotaby.features')</h2>
        <div class="feature-cards">
            <div class="card">
                <h3>@lang('kotaby.feature_1')</h3>
                <p>@lang('kotaby.feature_1_details')</p>
            </div>
            <div class="card">
                <h3>@lang('kotaby.feature_2')</h3>
                <p>@lang('kotaby.feature_2_details')</p>
            </div>
            <div class="card">
                <h3>@lang('kotaby.feature_3')</h3>
                <p>@lang('kotaby.feature_3_details')</p>
            </div>
            <div class="card">
                <h3>@lang('kotaby.feature_4')</h3>
                <p>@lang('kotaby.feature_4_details')</p>
            </div>
        </div>
    </section>

    <footer>
        <p>@lang('kotaby.footer')</p>
    </footer>
@endsection
