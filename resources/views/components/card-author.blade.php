<link rel="stylesheet" href="{{ asset('css/author-card.css') }}">

<div class="container my-5">
    <div class="row">
        @foreach ($authors as $author)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <a href="{{ route('users.show', $author->id) }}" style="text-decoration: none">
                    <div class="profile-card shadow-sm">
                        <img src="{{ asset($author->media_one->media) }}" alt="{{ $author->name }}">
                        <h5>{{ $author->username }}</h5>
                        @if (!isset($status))
                            <p class="rating">
                                {{-- Display full stars --}}
                                @for ($i = 1; $i <= $author->stars['fullStars'] ?? 5; $i++)
                                    @if ($i <= 5)
                                        <i class="fas fa-star filled"></i>
                                    @else
                                    @endif
                                @endfor

                                {{-- Display half star if applicable --}}
                                @if ($author->stars['hasHalfStar'] ?? false)
                                    <i class="fas fa-star-half-alt half-filled"></i>
                                @endif

                                {{-- Display empty stars --}}
                                @for ($i = 1; $i <= $author->stars['emptyStars']; $i++)
                                    <img src="{{ asset('images/img/empty-star.png') }}" class="empty-star"
                                        alt="Empty Star">
                                @endfor

                                ({{ number_format($author->getAverageRating(), 1) }} @lang('kotaby.review'))
                            </p>
                        @endif
                        @if (isset($report))
                            <div class="report-actions"
                                style="display: flex; align-items: center; gap: 20px;margin-right: 12px">
                                <form action="{{ route('admin.destroy.author', $author->id) }}" method="POST"
                                    style="margin-top: 17px">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none;border: none">
                                        <a href=""
                                            style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 211);">
                                            <img src="{{ asset('images/img/trash.png') }}" alt="trash"
                                                style="width: 20px; height: 20px;">
                                        </a>
                                    </button>
                                </form>

                                <a href="{{ route('admin.refused.author.report', $author->id) }}"
                                    style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 161);">
                                    @lang('kotaby.reports') : {{ $author->report_one->report }}
                                    <i class="fas fa-undo"
                                        style="width: 20px; height: 20px; margin-left: 12px;font-size: 20px"></i>
                                </a>
                            </div>
                        @endif
                        <p class="book-count">
                            <i class="fas fa-book"></i> {{ $author->getBookssCount($author->id) }} @lang('kotaby.books')
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
