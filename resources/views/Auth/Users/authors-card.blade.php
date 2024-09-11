@extends('layouts.app')

@section('content')
    <!--- setting  --->
    <x-setting-right />

    <!--- tape top --->
    <x-section-tape :title="$title" />

    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">
    <!--- author card --->
    <x-card-author :authors="$authors" />
@endsection
