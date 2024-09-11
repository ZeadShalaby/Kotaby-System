@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <link rel="stylesheet" href="{{ asset('css/report-book.css') }}">
    <div class="container">
        <div class="row">
            <!--- book card --->
            <x-card-author :authors="$authors" :status="true" :report="true" />

        </div>
    </div>
@endsection
