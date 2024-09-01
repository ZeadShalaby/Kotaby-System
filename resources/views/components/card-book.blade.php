@foreach ($books as $item)
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="book-card">
            <div class="author-container">
                <i class="save-icon">&#x1F516;</i>

                <p class="author">{{ $item->user->username }}</p>
            </div>
            <img src="{{ asset($item->media_one->media) }}" alt="رسائل من القرآن">
            <div class="rating-stars">

                <p class="title">{{ $item->name }}</p>
                <a href="{{ route('users.favourites', $item->id) }}"><i class="save-icon fas fa-bookmark"
                        style="color: {{ $tweet->isFavoritedBy(auth()->user()) ? '#ff0000' : '#000000' }}"></i></a>
            </div>
            <div class="rating-stars">
                <p class="stars" style="color: {{ $item->isStarBy(auth()->user()) ? '#ff0000' : '#000000' }}">&#9733;
                    &#9733; &#9733; &#9733; &#9734;</p>
                <p class="rating">{{ $item->star }} تقييم</p>
            </div>
        </div>
    </div>
@endforeach
<!-- كرر الكاردات الأخرى هنا -->
