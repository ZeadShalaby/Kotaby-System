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
    <?php if(isset($star)): ?>
        <?php echo app('translator')->get('kotaby.rate_book'); ?>
    <?php else: ?>
        <?php echo app('translator')->get('kotaby.problem'); ?>
    <?php endif; ?>
</label>

<div class="mb-3">
    <textarea class="form-control textarea w-100" id="review" placeholder="<?php echo app('translator')->get('kotaby.placeholderes'); ?>" name="comment"></textarea>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('kotaby.cancel'); ?></button>

    <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('kotaby.add_review'); ?></button>
</div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/content-star-report.blade.php ENDPATH**/ ?>