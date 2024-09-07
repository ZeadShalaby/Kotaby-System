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

                <!-- Reviews Count -->
                <div class="reviews-count" style="font-size: 12px; color: #EBBB3F;">
                    (12 مراجعات)
                </div>
            </div>
        </div>
    </div>
@endforeach
