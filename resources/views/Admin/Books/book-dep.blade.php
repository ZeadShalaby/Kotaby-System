@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <link rel="stylesheet" href="{{ asset('css/report-book.css') }}">
    <div class="container">
        <div class="row">
            <!--- book card --->
            <x-admin-book-card :books="$books" />

        </div>
    </div>
@endsection
