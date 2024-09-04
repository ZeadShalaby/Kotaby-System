@extends('layouts.app')

@section('content')
    <!--- setting  --->
    @component('components.setting-right')
    @endcomponent
    <!--- tape top --->
    @component('components.section-tape', ['title' => $title])
    @endcomponent

    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/author-card.css') }}">



    <div class="container my-5">
        <div class="row">

            @foreach ($authors as $author)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('users.show', $author->id) }}" style="text-decoration: none">
                        <div class="profile-card shadow-sm">
                            <img src="{{ asset($author->media_one->media) }}" alt="{{ $author->name }}">
                            <h5>{{ $author->username }}</h5>

                            <p class="rating">
                                {{-- Display full stars --}}
                                @for ($i = 1; $i <= $author->stars['fullStars']; $i++)
                                    @if ($i <= 5)
                                        <i class="fas fa-star filled"></i>
                                    @else
                                    @endif
                                @endfor

                                {{-- Display half star if applicable --}}
                                @if ($author->stars['hasHalfStar'])
                                    <i class="fas fa-star-half-alt half-filled"></i>
                                @endif

                                {{-- Display empty stars --}}
                                @for ($i = 1; $i <= $author->stars['emptyStars']; $i++)
                                    <img src="{{ asset('images/img/empty-star.png') }}" class="empty-star" alt="Empty Star">
                                @endfor

                                ({{ number_format($author->getAverageRating(), 1) }} تقييم)
                            </p>
                            <p class="book-count">
                                <i class="fas fa-book"></i> {{ $author->getBookssCount($author->id) }} كتاب
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach



        </div>
    </div>
@endsection
