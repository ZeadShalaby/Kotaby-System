@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/book-show.css') }}">

    <!--- tape section --->
    <x-section-tape :title="$title" />

    <!--- setting users --->
    <x-setting-right />

    <div class="container mt-5">
        <div class="reviews-section">
            <h5 class="reviews-title">التقييمات</h5>

            <x-comment :reviews="$reviews" />

        </div>
    </div>
@endsection
