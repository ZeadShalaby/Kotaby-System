<link rel="stylesheet" href="<?php echo e(asset('css/star.css')); ?>">

<div class="container">
    <div class="modal fade" id="rateModal" tabindex="-1" aria-labelledby="rateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rateModalLabel">إضافة مراجعة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <form action="<?php echo e(route('reviews.store', ['book_id' => $bookid])); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

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
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control textarea w-100" id="review" placeholder="أضف رأيك هنا..." name="comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>

                    <a href="#"> <button type="submit" class="btn btn-primary">إضافة</button>
                    </a>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/star-commit.blade.php ENDPATH**/ ?>