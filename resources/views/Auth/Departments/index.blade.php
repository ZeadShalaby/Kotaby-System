@extends('layouts.app')

@section('content')
    <!--- input Edit --->
    <x-setting-right />

    <!--- tape top --->
    <x-section-tape :title="$title" />

    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">
    <!--- card departments --->
    <x-card-department :departments="$departments" />
@endsection
