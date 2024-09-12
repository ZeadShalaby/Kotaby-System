@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!-- Hero Section -->
    <div class="hero d-flex flex-column justify-content-center align-items-center text-center p-4">
        <h1 class="display-4">@lang('kotaby.section')</h1>
        <div class="d-flex">
            <input type="text" class="form-control custom-input me-2" placeholder="@lang('kotaby.placeholders')"
                style="width: 632px;" />
            <button class="btn btn-warning">@lang('kotaby.search')</button>
        </div>
    </div>

    <!--- input Edit --->
    <x-setting-right />
    <!--- tape top --->
    <x-section-tape :title="$title" />

    <div class="container">
        <div class="row">
            <!--- card books --->
            <x-card-book :books="$books" />
        </div>
    </div>
@endsection
