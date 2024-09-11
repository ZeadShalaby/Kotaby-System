<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Your custom CSS -->
<link rel="stylesheet" href="{{ asset('css/star.css') }}">

<!-- Modal HTML -->
<div class="container">
    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reportModalLabel">إضافة مراجعة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @php
                    $route = $route ?? 'users.loginindex';
                    $request = $request ?? 'defaultRequest';
                    $id = $id ?? 'defaultId';
                @endphp
                <div class="modal-body">
                    <form action="{{ route($route, [$request => $id]) }}" method="POST">
                        {{ csrf_field() }}
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
                        <label for="rating" class="form-label">ما رأيك في الكتاب</label>
                        <div class="mb-3">
                            <textarea class="form-control textarea w-100" id="review" placeholder="أضف رأيك هنا..." name="comment"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                            <button type="submit" class="btn btn-primary">إضافة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle with Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
