@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">


    <!--- tape section --->
    @component('components.section-tape', ['title' => $title])
    @endcomponent
    <!--- setting users --->
    @component('components.setting-right')
    @endcomponent

    <div class="container">
        <div class="row">
            <!--- card books --->
            @component('components.card-book', ['books' => $books->book])
            @endcomponent

        </div>
    </div>
@endsection
