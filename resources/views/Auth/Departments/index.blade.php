@extends('layouts.app')

@section('content')
    <!--- input Edit --->
    @component('components.setting-right')
    @endcomponent
    <!--- tape top --->
    @component('components.section-tape', ['title' => $title])
    @endcomponent

    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">


    @component('components.card-department', ['departments' => $departments])
    @endcomponent
@endsection
