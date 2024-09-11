@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/card-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!--- input Edit --->
    <x-setting-right />

    <!--- tape top --->
    <x-section-tape />


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-end">
                <h2 class="mb-4 text-center d-block">الصفحة الشخصية</h2>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">

                        <h5 class="card-title">تحميلات</h5>
                        <p class="card-text">{{ Auth::user()->getCountDownload() }} تحميلات<i class="fas fa-download"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">

                    <div class="card-body">
                        <h5 class="card-title">قراءات</h5>
                        <p class="card-text">{{ Auth::user()->getCountView() }} قراءات <i class="fas fa-book"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <a href="{{ route('reviews.index') }}" style="text-decoration: none">
                        <div class="card-body">
                            <h5 class="card-title">مراجعاتي</h5>
                            <p class="card-text">{{ Auth::user()->getCountMyReview() }} مراجعة <i
                                    class="fas fa-star icon-margin"></i>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <a href="{{ route('books.index') }}" style="text-decoration: none">
                        <div class="card-body">
                            <h5 class="card-title">مكتبتي</h5>
                            <p class="card-text">{{ Auth::user()->getBookssCount() }} كتاب <i class="fas fa-book"></i></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <a href="{{ route('favourite.index') }}" style="text-decoration: none">

                        <div class="card-body">
                            <h5 class="card-title">المفضلة</h5>
                            <p class="card-text">{{ Auth::user()->getCountFav() }} كتاب <i class="fas fa-bookmark"></i></p>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
@endsection
