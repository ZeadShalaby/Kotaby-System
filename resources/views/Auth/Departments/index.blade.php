@extends('layouts.app')

@section('content')
    <!--- input Edit --->
    @component('components.setting-right')
    @endcomponent
    <!--- tape top --->
    @component('components.section-tape', ['title' => $title])
    @endcomponent

    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dep-card.css') }}">


    <div class="container my-5">
        <div class="row">
            @foreach ($departments as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="{{ route('dep.show', $item->id) }}" style="text-decoration: none">
                        <div class="book-card">
                            <img src="{{ asset($item->media_one->media) }}" alt="{{ $item->media_one->media }}">
                            <div>
                                <h5 class="book-card-title">{{ $item->name }}</h5>
                                <p class="book-card-text">
                                    {{ $item->getBooksCount($item->id) }} كتاب
                                    <i class="fas fa-book book-card-icon"></i>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
