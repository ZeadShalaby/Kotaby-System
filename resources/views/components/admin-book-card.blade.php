@foreach ($books as $book)
    <div class="card p-0 col-md-3 mb-4">
        <div class="card-image">
            <img src="{{ asset($book->media_one->media) }}?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 100%"
                alt="">
        </div>
        <div class="card-content d-flex flex-column align-items-center">
            <h4 class="pt-2">{{ $book->title }}</h4>
            @if (isset($report))
                <div class="report-actions"
                    style="display: flex; align-items: center; gap: 20px; margin-top: 10px;margin-left: 30px">
                    <form action="{{ route('admin.destroy.report', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: none;border: none">
                            <a href=""
                                style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 211);">
                                <img src="{{ asset('images/img/trash.png') }}" alt="trash"
                                    style="width: 20px; height: 20px; margin-left: 5px;">
                            </a>
                        </button>
                    </form>

                    <a href="{{ route('admin.refused.report', $book->id) }}"
                        style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 161);">
                        @lang('kotaby.reports') : {{ $book->report_one->report }}
                        <i class="fas fa-undo" style="width: 20px; height: 20px; margin-left: 12px;font-size: 20px"></i>
                    </a>
                </div>
            @endif
            <!-- Star Rating -->
            <div style="color: #FBB03B; margin-top: 10px; font-weight: bold; font-size: 20px;margin-left: 65px">
                @for ($i = 1; $i <= $book->star; $i++)
                    &#9733; <!-- Full Star -->
                @endfor
                @for ($j = 1; $j <= 5 - $book->star; $j++)
                    &#9734; <!-- Empty Star -->
                @endfor
            </div>
        </div>
    </div>
@endforeach
