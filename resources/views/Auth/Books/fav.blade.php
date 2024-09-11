@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!--- tape section --->
    <x-section-tape :title="$title" />

    <!--- setting users --->
    <x-setting-right />

    <div class="container">
        <div class="row">
            <!--- card books --->
            <x-card-book :books="$books" />
        </div>
    </div>
@endsection
