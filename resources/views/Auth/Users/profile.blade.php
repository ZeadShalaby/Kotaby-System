@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/card-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!--- input Edit --->
    <x-setting-right />

    <!--- tape top --->
    <x-section-tape />


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-end">
                <h2 class="mb-4 text-center d-block">@lang('kotaby.profile')</h2>
            </div>
            <x-card-profile :titles="__('kotaby.downloads')" :method="Auth::user()->getCountDownload()" :icon="'download'" :title="__('kotaby.downloads')" />
            <x-card-profile :titles="__('kotaby.readings')" :method="Auth::user()->getCountView()" :icon="'book'" :title="__('kotaby.readings')" />
            <x-card-profile :route="'reviews.index'" :titles="__('kotaby.reviewses')" :method="Auth::user()->getCountMyReview()" :icon="'star'" :title="__('kotaby.reviewses')" />
            <x-card-profile :route="'books.index'" :titles="__('kotaby.my books')" :method="Auth::user()->getBookssCount()" :icon="'book'"
                :title="__('kotaby.mybooks')" />
            <x-card-profile :route="'favourite.index'" :titles="__('kotaby.favourites')" :method="Auth::user()->getCountFav()" :icon="'bookmark'"
                :title="__('kotaby.favourites')" />

        </div>
    </div>
@endsection
