@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/book-show.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--- tape section --->
    <x-setting-right :title="$title" />


    <div class="container mt-5">
        <div class="card mb-4" style="max-width: 1040px; margin: 20px auto;">

            <!-- Dropdown Menu -->
            <x-setting-right :book="$book" />

            <div class="row g-0">
                <!-- الصورة ناحية اليمين -->
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset($book->media_one->media) }}" class="img-fluid book-image"
                        style="width: 460px; height: 450px; object-fit: cover; margin-top: 30px;" alt="Book Cover">
                </div>
                <!-- النص ناحية اليسار -->
                <div class="col-md-8 d-flex flex-column justify-content-start align-items-start" style="padding-top: 32px;">
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #EBBB3F; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        {{ $book->user->username }}
                    </h5>
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #1C2A39; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        {{ $book->title }}
                    </h5>
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #EBBB3F; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        {{ $book->department->name ?? 'not found' }} </h5>
                    <ul>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong class="text-left">@lang('kotaby.language'):</strong>
                            <span style="margin-right: 400px">{{ $book->language }}</span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">@lang('kotaby.release_date'):</strong>
                            <span>{{ $book->creation_date_formatted }}</span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">@lang('kotaby.pages'):</strong>
                            <span>{{ $book->num_pages }}</span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">@lang('kotaby.file_size'):</strong>
                            <span>148.13 ميجا بايت</span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">@lang('kotaby.file_type'):</strong>
                            <span>PDF</span>
                        </li>
                        <li style="display: flex; justify-content: space-between;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">@lang('kotaby.downloads'):</strong>
                            <span>{{ $book->download ?? 0 }}</span>
                        </li>
                    </ul>


                    <div class="d-flex justify-content-right align-items-right mb-7" style="margin-right:34px">
                        <p class="stars" style="color: #fff200; font-size: 30px;">
                            @for ($i = 1; $i <= $book->stars['fullStars']; $i++)
                                @if ($i <= 5)
                                    &#9733; <!-- Full Star -->
                                @else
                                @endif
                            @endfor

                            @if ($book->stars['halfStar'])
                                &#9733; <!-- Half Star (can be styled differently if needed) -->
                            @endif

                            @for ($i = 1; $i <= $book->stars['emptyStars']; $i++)
                                &#9734; <!-- Empty Star -->
                            @endfor

                        </p>
                        <span class="mx-3"></span>
                        <span
                            style="color:#EBBB3F;font-weight:bold;font-size: 15px; margin-top: -10px">({{ $book->view }})
                            @lang('kotaby.views')</span>
                        <span class="mx-3"></span>
                        <span
                            style="color:#EBBB3F;font-weight:bold;font-size: 15px; margin-top: -10px">({{ $book->reviews()->count() }})
                            @lang('kotaby.reviews')</span>

                    </div>

                    <div class="btn-container d-flex justify-content-center mt-3" style="margin-right: 35px">

                        <form action="{{ route('favourite.store', ['book_id' => $book->id]) }}" method="POST">
                            {{ csrf_field() }}
                            <button style="background: none; border: none" id = 'toggleButton'>
                                <a href="#" class="btn"
                                    style="border: 2px solid #1B3764; color:
                                    {{ $book->isFavoritedBy(auth()->user()) ? '#ff0000' : '#1B3764' }}"><i
                                        class="fas fa-save" style="margin-left:2px;"></i>@lang('kotaby.save')</a>
                            </button>

                        </form>

                        <a href="#" type="button" class="btn me-2" style="border: 2px solid #1B3764"
                            data-bs-toggle="modal" data-bs-target="#rateModal"><i class="fas fa-star"
                                style="color: #1B3764;margin-left: 2px"></i>
                            @lang('kotaby.rate')</a>
                        {{-- {{ route('reportindex', $book->id) }} --}}
                        <a href="{{ route('download.pdf', $book->id) }}" class="btn me-2"
                            style="border: 2px solid #1B3764"><i class="fas fa-download"
                                style="color: #1B3764;margin-left: 2px"></i> @lang('kotaby.download_pdf')</a>
                        <a href="{{ route('books.pdf', $book->id) }}" class="btn" style="border: 2px solid #1B3764"><i
                                class="fas fa-book" style="color: #1B3764; margin-left: 2px"></i> @lang('kotaby.view_pdf')</a>
                        <a href="#" class="btn" style="border: 2px solid #1B3764" data-bs-toggle="modal"
                            data-bs-target="#rateModals"><i class="fas fa-warning"
                                style="color: #1B3764; margin-left: 2px"></i> @lang('kotaby.report')</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- star commit --->

    <x-star-commit :bookid="$book->id" />

    <x-report-book-commit :bookid="$book->id" />

    <div class="container mt-5">
        <div class="summary-section">
            <h5 class="summary-title">@lang('kotaby.summary')</h5>
            <p class="summary-text">
                {{ $book->description }} .. <a href="#">@lang('kotaby.read_more') </a>
            </p>
            <div class="share-section">
                <p class="share-text">@lang('kotaby.share_with_friends')</p>
                <div class="share-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="reviews-section">
            <h5 class="reviews-title">@lang('kotaby.reviewes')</h5>

            <!--- comment reviews--->
            <x-comment :reviews="$reviews" />

        </div>
    </div>
@endsection
