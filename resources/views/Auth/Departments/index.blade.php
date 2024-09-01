@extends('layouts.app')

@section('content')
    <style>
        /* Custom styles for the cards */
        .book-card {
            border-radius: 15px;
            border: 1px solid #e5e5e5;
            padding: 15px;
            display: flex;
            align-items: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .book-card img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            margin-right: 15px;
        }

        .book-card-title {
            font-weight: bold;
            color: #263859;
            margin-bottom: 5px;
        }

        .book-card-text {
            font-size: 1rem;
            color: #f0a500;
            margin-bottom: 0;
        }

        .book-card-icon {
            font-size: 1.2rem;
            color: #f0a500;
            margin-left: 5px;
        }
    </style>

    <div class="container my-5">
        <div class="row">
            @for ($i = 0; $i < 18; $i++)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="book-card">
                        <img src="{{ asset('images/books/book1.png') }}" alt="Book Image">
                        <div>
                            <h5 class="book-card-title">الفكر والثقافة العامة</h5>
                            <p class="book-card-text">
                                123 كتاب
                                <i class="fas fa-book book-card-icon"></i>
                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
