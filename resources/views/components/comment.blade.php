@foreach ($reviews as $item)
    <!-- Review 1 -->
    <div class="review-card" style="display: flex; align-items: flex-start; margin-bottom: 20px;">
        <!-- User Image -->
        <div class="user-image">
            <img src="{{ asset($item->user->media_one->media) }}" alt="User Image"
                style="width: 80px; height: 80px; border-radius: 50%;">
        </div>

        <div class="review-content" style="flex-grow: 1; padding-left: 15px;">
            <!-- Review Header -->
            <div class="review-header" style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                <div class="name" style="font-weight: bold; font-size: 16px;">
                    {{ $item->user->username }}
                </div>
                <div class="date" style="font-size: 12px; color: gray;">
                    {{ $item->creation_date_formatted }}
                </div>
            </div>

            <!-- Review Body (Comment) -->
            <div class="review-body text-start" style="margin-bottom: 10px; font-size: 14px; color: #1C2A39;">
                {{ $item->comment }}
            </div>

            @if (!isset($status))
                <!-- Review Footer -->
                <div class="review-footer" style="display: flex; justify-content: space-between; align-items: center;">
                    <!-- Star Rating -->
                    <div class="rating" style="color: #FBB03B;">
                        @for ($i = 1; $i <= $item->star; $i++)
                            @if ($i <= 5)
                                &#9733; <!-- Full Star -->
                            @else
                            @endif
                        @endfor
                        @for ($j = 1; $j <= 5 - $item->star; $j++)
                            &#9734; <!-- Empty Star -->
                        @endfor
                    </div>
                    <a href="#" class="btn" style="border: none;margin-right: 500px" data-bs-toggle="modal"
                        data-bs-target="#rateModales"><i class="fas fa-warning" style="color: #1B3764;"></i>
                    </a>
                    <!-- Reviews Count -->
                    <div class="reviews-count" style="font-size: 12px; color: #EBBB3F;">
                        (12 مراجعات)

                    </div>

                </div>
                <x-report-review-commit :reviewid="$item->id" />
            @endif
            @if (isset($report))
                <div class="report-actions" style="display: flex; align-items: center; gap: 20px;margin-left: 550px">
                    <form action="{{ route('admin.destroy.review', $item->id) }}" method="POST"
                        style="margin-top: 5px">
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

                    <a href="{{ route('admin.refused.report.review', $item->id) }}"
                        style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 161);">
                        Report: {{ $item->report_one->report }}
                        <i class="fas fa-undo" style="width: 20px; height: 20px; margin-left: 12px;font-size: 20px"></i>
                    </a>
                </div>
            @endif

        </div>
    </div>
@endforeach
