@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <link rel="stylesheet" href="{{ asset('css/report-book.css') }}">
    <div class="container">
        <div class="row">
            @component('components.admin-book-card', ['books' => $books])
            @endcomponent
        </div>
    </div>
@endsection
