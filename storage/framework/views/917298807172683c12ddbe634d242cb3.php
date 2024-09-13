<link rel="stylesheet" href="<?php echo e(asset('css/report.css')); ?>">

<div class="container">
    <div class="modal fade" id="rateModals" tabindex="-1" aria-labelledby="rateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rateModalLabel"><?php echo app('translator')->get('kotaby.reportes'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <form action="<?php echo e(route('report.book.index', $bookid)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <!---- content star ---->
                            <?php if (isset($component)) { $__componentOriginalba33405540c78641fd9c78f9e8b8bace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalba33405540c78641fd9c78f9e8b8bace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.content-star-report','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('content-star-report'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalba33405540c78641fd9c78f9e8b8bace)): ?>
<?php $attributes = $__attributesOriginalba33405540c78641fd9c78f9e8b8bace; ?>
<?php unset($__attributesOriginalba33405540c78641fd9c78f9e8b8bace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba33405540c78641fd9c78f9e8b8bace)): ?>
<?php $component = $__componentOriginalba33405540c78641fd9c78f9e8b8bace; ?>
<?php unset($__componentOriginalba33405540c78641fd9c78f9e8b8bace); ?>
<?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/report-book-commit.blade.php ENDPATH**/ ?>