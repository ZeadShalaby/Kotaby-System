@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/book-show.css') }}">

    <div class="container mt-5">
        <div class="reviews-section">
            <!--- book card --->
            <x-comment :reviews="$reviews" :status="true" :report="true" />
        </div>
    </div>
@endsection
