<div class="stars">
    <input type="radio" name="star" id="star1" value="5">
    <label for="star1">&#9733;</label>
    <input type="radio" name="star" id="star2" value="4">
    <label for="star2">&#9733;</label>
    <input type="radio" name="star" id="star3" value="3">
    <label for="star3">&#9733;</label>
    <input type="radio" name="star" id="star4" value="2">
    <label for="star4">&#9733;</label>
    <input type="radio" name="star" id="star5" value="1">
    <label for="star5">&#9733;</label>
</div>

<label for="rating" class="form-label">
    @if (isset($star))
        @lang('kotaby.rate_book')
    @else
        @lang('kotaby.problem')
    @endif
</label>

<div class="mb-3">
    <textarea class="form-control textarea w-100" id="review" placeholder="@lang('kotaby.placeholderes')" name="comment"></textarea>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('kotaby.cancel')</button>

    <button type="submit" class="btn btn-primary">@lang('kotaby.add_review')</button>
</div>
