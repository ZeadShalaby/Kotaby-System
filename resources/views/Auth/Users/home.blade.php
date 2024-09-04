@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!-- Hero Section -->
    <div class="hero d-flex flex-column justify-content-center align-items-center text-center p-4">
        <h1 class="display-4">كتبي... سافر بكُتبك إلى عالم آخر.</h1>
        <div class="d-flex">
            <input type="text" class="form-control custom-input me-2" placeholder="ابحث عن كتاب أو مؤلف أو قسم كتاب"
                style="width: 632px;" />
            <button class="btn btn-warning">ابحث</button>
        </div>
    </div>

    <!--- input Edit --->
    @component('components.setting-right')
    @endcomponent
    <!--- tape top --->
    @component('components.section-tape', ['title' => $title])
    @endcomponent

    <div class="container">
        <div class="row">
            <!--- card books --->
            @component('components.card-book', ['books' => $books])
            @endcomponent

        </div>
    </div>
@endsection
