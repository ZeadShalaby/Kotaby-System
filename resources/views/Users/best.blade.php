@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/card.css') }}"> <!-- شريط البريدكرمب -->

    @component('components.section-tape')
    @endcomponent
    <div class="container">
        <div class="row">

            <div class="book-card">
                <div class="author-container">
                    <i class="save-icon">&#x1F516;</i>

                    <p class="author">أدهم شرقاوي</p>
                </div>
                <img src="{{ asset('images/books/book1.png') }}" alt="رسائل من القرآن">
                <div class="rating-stars">

                    <p class="title">كتاب رسائل من القرآن</p>
                    <a href="{{ route('users.loginindex') }}"><i class="save-icon fas fa-bookmark"></i></a>
                </div>
                <div class="rating-stars">
                    <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <p class="rating">234 تقييم</p>
                </div>
                {{-- <div class="rating-stars">
                    <a href="#"><i class="fas fa-edit edit-icon"></i></a> <!-- Edit Icon -->
                    <a href="#" style="color: red"><i class="fas fa-trash delete-icon"></i></a> <!-- Delete Icon -->
                </div> --}}
            </div>
            <div class="book-card">
                <div class="author-container">
                    <i class="save-icon">&#x1F516;</i>
                    <p class="author">أدهم شرقاوي</p>
                </div>
                <img src="{{ asset('images/books/book1.png') }}" alt="رسائل من القرآن">
                <div class="rating-stars">

                    <p class="title">كتاب رسائل من القرآن</p>
                    <a href="{{ route('users.loginindex') }}"><i class="save-icon fas fa-bookmark"></i></a>
                </div>
                <div class="rating-stars">
                    <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <p class="rating">234 تقييم</p>
                </div>
            </div>
            <div class="book-card">
                <div class="author-container">
                    <i class="save-icon">&#x1F516;</i>
                    <p class="author">أدهم شرقاوي</p>
                </div>
                <img src="{{ asset('images/books/book1.png') }}" alt="رسائل من القرآن">
                <div class="rating-stars">

                    <p class="title">كتاب رسائل من القرآن</p>
                    <a href="#"><i class="save-icon fas fa-bookmark"></i></a>
                </div>
                <div class="rating-stars">
                    <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <p class="rating">234 تقييم</p>
                </div>
            </div>
            <div class="book-card">
                <div class="author-container">
                    <i class="save-icon">&#x1F516;</i>
                    <p class="author">أدهم شرقاوي</p>
                </div>
                <img src="{{ asset('images/books/book1.png') }}" alt="رسائل من القرآن">
                <div class="rating-stars">

                    <p class="title">كتاب رسائل من القرآن</p>
                    <a href="#"><i class="save-icon fas fa-bookmark"></i></a>
                </div>
                <div class="rating-stars">
                    <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <p class="rating">234 تقييم</p>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="book-card">
                <div class="author-container">
                    <i class="save-icon">&#x1F516;</i>
                    <p class="author">أدهم شرقاوي</p>
                </div>
                <img src="{{ asset('images/books/book1.png') }}" alt="رسائل من القرآن">
                <div class="rating-stars">

                    <p class="title">كتاب رسائل من القرآن</p>
                    <a href="#"><i class="save-icon fas fa-bookmark"></i></a>
                </div>
                <div class="rating-stars">
                    <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <p class="rating">234 تقييم</p>
                </div>
            </div>
            <div class="book-card">
                <div class="author-container">
                    <i class="save-icon">&#x1F516;</i>
                    <p class="author">أدهم شرقاوي</p>
                </div>
                <img src="{{ asset('images/books/book1.png') }}" alt="رسائل من القرآن">
                <div class="rating-stars">

                    <p class="title">كتاب رسائل من القرآن</p>
                    <a href="#"><i class="save-icon fas fa-bookmark"></i></a>
                </div>
                <div class="rating-stars">
                    <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <p class="rating">234 تقييم</p>
                </div>
            </div>
            <div class="book-card">
                <div class="author-container">
                    <i class="save-icon">&#x1F516;</i>
                    <p class="author">أدهم شرقاوي</p>
                </div>
                <img src="{{ asset('images/books/book1.png') }}" alt="رسائل من القرآن">
                <div class="rating-stars">

                    <p class="title">كتاب رسائل من القرآن</p>
                    <a href="#"><i class="save-icon fas fa-bookmark"></i></a>
                </div>
                <div class="rating-stars">
                    <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <p class="rating">234 تقييم</p>
                </div>
            </div>
            <div class="book-card">
                <div class="author-container">
                    <i class="save-icon">&#x1F516;</i>
                    <p class="author">أدهم شرقاوي</p>
                </div>
                <img src="{{ asset('images/books/book1.png') }}" alt="رسائل من القرآن">
                <div class="rating-stars">

                    <p class="title">كتاب رسائل من القرآن</p>
                    <a href="#"><i class="save-icon fas fa-bookmark"></i></a>
                </div>
                <div class="rating-stars">
                    <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <p class="rating">234 تقييم</p>
                </div>
            </div>

        </div>
    </div>
@endsection
