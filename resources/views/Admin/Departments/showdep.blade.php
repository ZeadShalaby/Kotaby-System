@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <!----- content ----->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-dep-show.css') }}">
    <div id="container">

        <div class="product-details">
            <h1>{{ $department->name }}</h1>
            <span class="hint-star star">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>

            <p class="information">
                @lang('kotaby.department_info', ['description' => 'the correct tree which will enhance your Christmas.'])
            </p>

            <div class="control">
                <button class="btn">
                    <span class="price"><i class="fas fa-sitemap" aria-hidden="true"></i></span>
                    <span class="shopping-cart"><i class="fas fa-building" aria-hidden="true"></i></span>
                    <span class="buy">@lang('kotaby.get_now')</span>
                </button>
            </div>
        </div>

        <div class="product-image">
            <img src="{{ asset($department->media_one->media) }}" alt=""
                style="width: 500px; height: 100%; object-fit: cover;">

            <div class="info">
                <h2>@lang('kotaby.description')</h2>
                <ul>
                    <li><strong>@lang('kotaby.name'):</strong> {{ $department->name }}</li>
                    <li><strong>@lang('kotaby.code'):</strong> {{ $department->code }}</li>
                    <li><strong>@lang('kotaby.decoration'):</strong> balls and bells</li>
                    <li><strong>@lang('kotaby.material'):</strong> Eco-Friendly</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
