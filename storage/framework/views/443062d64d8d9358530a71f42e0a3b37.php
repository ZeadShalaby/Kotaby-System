<link rel="stylesheet" href="<?php echo e(asset('css/deopdown-menu.css')); ?>">

<div class="dropdown" style="display: <?php echo e($book->user_id === auth()->id() ? 'inline' : 'none'); ?>">

    <?php if($book->user_id === auth()->id()): ?>
        <div id="myDropdown<?php echo e($book->id); ?>" class="dropdown-content" style="margin-left: 50px">
            <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" style="background: none; border: none;margin-left: 50px">
                    <a href="#">
                        <img src="<?php echo e(asset('images/img/trash.png')); ?>" alt="Trash">
                    </a>
                </button>
            </form>
            <div style="margin-left: 10px;margin-top: -24.7px;color: #1B3764">
                <a href="<?php echo e(route('books.edit', $book->id)); ?>">
                    <img src="<?php echo e(asset('images/img/edit.png')); ?>" alt="Edit Tweet">
                </a>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/dropdown-menu.blade.php ENDPATH**/ ?>