@foreach ($books as $item)
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="book-card">
            <div class="author-container">
                <i class="save-icon">&#x1F516;</i>
                <p class="author">{{ $item->user->username }}</p>
            </div>
            <a href="{{ route('books.show') }}">
                <img src="{{ asset($item->media_one->media) }}" alt="{{ $item->title }}">
            </a>
            <div class="rating-stars">
                <p class="title">{{ $item->title }}</p>
                <a href="{{ route('users.favourites', $item->id) }}"><i class="save-icon fas fa-bookmark"
                        style="color: {{ Auth::check() && $item->isFavoritedBy(Auth::user()) ? '#ff0000' : '#000000' }}"></i>
                </a>
            </div>
            <div class="rating-stars">


                <p class="stars" style="color: #fff200; font-size: 24px;">
                    @for ($i = 1; $i <= $item->stars['fullStars']; $i++)
                        @if ($i <= 5)
                            &#9733; <!-- Full Star -->
                        @else
                        @endif
                    @endfor

                    @if ($item->stars['halfStar'])
                        &#9733; <!-- Half Star (can be styled differently if needed) -->
                    @endif

                    @for ($i = 1; $i <= $item->stars['emptyStars']; $i++)
                        &#9734; <!-- Empty Star -->
                    @endfor
                </p>
                {{-- {{ $item->stars['averageRating ']'}} / 5 --}}
                <p class="rating">{{ $item->reviews()->count() }} تقييم</p>
            </div>

        </div>
    </div>
@endforeach
