@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user-show.css') }}">
    <!--- setting  --->
    <x-setting-right />

    <!--- tape top --->
    <x-section-tape :title="$title" />


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
                                    <div class="btn-container d-flex justify-content-center mt-3"
                                        style="margin-right: 200px">

                                        <a href="#" class="btn" style="border: 2px solid #1B3764"
                                            data-bs-toggle="modal" data-bs-target="#rateModals"><i class="fas fa-warning"
                                                style="color: #1B3764; margin-left: 2px"></i>
                                            التبليغ عنه</a>

                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- Author report --->
    <x-report-author-commit :userid="$authors->id" />


    <!--- tape top --->

    <x-section-tape :title="' كتب > ' . $authors->username" />

    <!---- books card ---->
    <div class="container">
        <div class="row">
            <!--- card books --->
            <x-card-book :books="$books" />

        </div>
    </div>
@endsection
