@extends('layouts.app')

@section('content')
    <!--- input Edit --->
    @component('components.setting-right')
    @endcomponent
    <!--- tape top --->
    @component('components.section-tape')
    @endcomponent

    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">


    <style>
        .profile-card {
            border-radius: 15px;
            border: 1px solid #e5e5e5;
            background-color: #fff;
            padding: 20px;
            text-align: center;
        }

        .profile-card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 15px;
        }

        .profile-card h5 {
            font-weight: bold;
            color: #263859;
            margin-bottom: 10px;
        }

        .profile-card .rating,
        .profile-card .book-count {
            color: #263859;
            font-size: 0.9rem;
        }

        .profile-card .rating i {
            color: #f4c542;
            /* Star color */
        }
    </style>

    <div class="container my-5">
        <div class="row">
            {{-- @foreach ($users as $user) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="profile-card shadow-sm">
                    <img src="{{ asset('images/users/user1.png') }}" alt="ييي">
                    <h5>نؤيؤي</h5>
                    <p class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>(24 تقييم)
                    </p>
                    <p class="book-count">
                        <i class="fas fa-book"></i> 124 كتاب
                    </p>
                </div>
            </div>
            {{-- @endforeach --}}

            {{-- @foreach ($users as $user) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="profile-card shadow-sm">
                    <img src="{{ asset('images/users/user1.png') }}" alt="ييي">
                    <h5>نؤيؤي</h5>
                    <p class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>(24 تقييم)
                    </p>
                    <p class="book-count">
                        <i class="fas fa-book"></i> 124 كتاب
                    </p>
                </div>
            </div>
            {{-- @endforeach --}}

            {{-- @foreach ($users as $user) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="profile-card shadow-sm">
                    <img src="{{ asset('images/users/user1.png') }}" alt="ييي">
                    <h5>نؤيؤي</h5>
                    <p class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>(24 تقييم)
                    </p>
                    <p class="book-count">
                        <i class="fas fa-book"></i> 124 كتاب
                    </p>
                </div>
            </div>
            {{-- @endforeach --}}

            {{-- @foreach ($users as $user) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="profile-card shadow-sm">
                    <img src="{{ asset('images/users/user1.png') }}" alt="ييي">
                    <h5>نؤيؤي</h5>
                    <p class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>(24 تقييم)
                    </p>
                    <p class="book-count">
                        <i class="fas fa-book"></i> 124 كتاب
                    </p>
                </div>
            </div>
            {{-- @endforeach --}}

            {{-- @foreach ($users as $user) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="profile-card shadow-sm">
                    <img src="{{ asset('images/users/user1.png') }}" alt="ييي">
                    <h5>نؤيؤي</h5>
                    <p class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>(24 تقييم)
                    </p>
                    <p class="book-count">
                        <i class="fas fa-book"></i> 124 كتاب
                    </p>
                </div>
            </div>
            {{-- @endforeach --}}

            {{-- @foreach ($users as $user) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="profile-card shadow-sm">
                    <img src="{{ asset('images/users/user1.png') }}" alt="ييي">
                    <h5>نؤيؤي</h5>
                    <p class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>(24 تقييم)
                    </p>
                    <p class="book-count">
                        <i class="fas fa-book"></i> 124 كتاب
                    </p>
                </div>
            </div>
            {{-- @endforeach --}}

            {{-- @foreach ($users as $user) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="profile-card shadow-sm">
                    <img src="{{ asset('images/users/user1.png') }}" alt="ييي">
                    <h5>نؤيؤي</h5>
                    <p class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>(24 تقييم)
                    </p>
                    <p class="book-count">
                        <i class="fas fa-book"></i> 124 كتاب
                    </p>
                </div>
            </div>
            {{-- @endforeach --}}


            {{-- @foreach ($users as $user) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="profile-card shadow-sm">
                    <img src="{{ asset('images/users/user1.png') }}" alt="ييي">
                    <h5>نؤيؤي</h5>
                    <p class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i> ( 24 تقييم)
                    </p>
                    <p class="book-count">
                        <i class="fas fa-book"></i> 124 كتاب
                    </p>
                </div>
            </div>
            {{-- @endforeach --}}

        </div>
    </div>
@endsection
