@extends('layouts.app')
@section('content')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card-title {
            font-weight: bold;
            font-size: 1.25rem;
        }

        .card-text {
            color: #666;
        }

        .rating .stars i {
            font-size: 1.5rem;
        }

        .rating .reviews {
            margin-right: 10px;
            font-weight: bold;
            color: #666;
        }

        .btn {
            font-size: 1rem;
            padding: 0.5rem 1.5rem;
        }
    </style>
    <!--- setting  --->
    @component('components.setting-right')
    @endcomponent
    <!--- tape top --->
    @component('components.section-tape', ['title' => $title . ' > ' . $authors->username])
    @endcomponent

    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/author-card.css') }}">



    <div class="container my-4" style=" text-align: right; ">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-3 text-center"><img src="{{ asset($authors->media_one->media) }}"
                        class="img-fluid rounded-circle mt-3" alt="Profile Picture"></div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title" style="padding: 15px"> {{ $authors->username }}</h5>
                        <p class="card-text">كاتب مصري رائد في أدب المغامرات له عدد من سلسل...
                            {{ $authors->about }} <a href="#" class="text-decoration-none">اقرأ المزيد</a></p>
                        <div class="rating d-flex align-items-center"><span class="stars me-2"><i <p class="rating">
                                    <p class="stars" style="color: #fff200; font-size: 29px;">
                                        @for ($i = 1; $i <= $authors->stars['fullStars']; $i++)
                                            @if ($i <= 5)
                                                &#9733;
                                            @else
                                            @endif
                                            <!-- Full Star -->
                                        @endfor

                                        @if ($authors->stars['hasHalfStar'])
                                            &#9733; <!-- Half Star (can be styled differently if needed) -->
                                        @endif

                                        @for ($i = 1; $i <= $authors->stars['emptyStars']; $i++)
                                            &#9734; <!-- Empty Star -->
                                        @endfor

                                        <span class="span-author"> ({{ $authors->getCountStar() }}
                                            تقييم)</span>
                                        <span class="span-author"> ({{ $authors->getCountView() }} المشاهدات)</span>

                                    </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- tape top --->
    @component('components.section-tape', ['title' => ' كتب > ' . $authors->username])
    @endcomponent
    <!---- books card ---->
    <div class="container">
        <div class="row">
            <!--- card books --->
            @component('components.card-book', ['books' => $books])
            @endcomponent

        </div>
    </div>
@endsection
