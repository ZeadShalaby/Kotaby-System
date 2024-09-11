<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- Review 1 -->
    <div class="review-card" style="display: flex; align-items: flex-start; margin-bottom: 20px;">
        <!-- User Image -->
        <div class="user-image">
            <img src="<?php echo e(asset($item->user->media_one->media)); ?>" alt="User Image"
                style="width: 80px; height: 80px; border-radius: 50%;">
        </div>

        <div class="review-content" style="flex-grow: 1; padding-left: 15px;">
            <!-- Review Header -->
            <div class="review-header" style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                <div class="name" style="font-weight: bold; font-size: 16px;">
                    <?php echo e($item->user->username); ?>

                </div>
                <div class="date" style="font-size: 12px; color: gray;">
                    <?php echo e($item->creation_date_formatted); ?>

                </div>
            </div>

            <!-- Review Body (Comment) -->
            <div class="review-body text-start" style="margin-bottom: 10px; font-size: 14px; color: #1C2A39;">
                <?php echo e($item->comment); ?>

            </div>

            <?php if(!isset($status)): ?>
                <!-- Review Footer -->
                <div class="review-footer" style="display: flex; justify-content: space-between; align-items: center;">
                    <!-- Star Rating -->
                    <div class="rating" style="color: #FBB03B;">
                        <?php for($i = 1; $i <= $item->star; $i++): ?>
                            <?php if($i <= 5): ?>
                                &#9733; <!-- Full Star -->
                            <?php else: ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <?php for($j = 1; $j <= 5 - $item->star; $j++): ?>
                            &#9734; <!-- Empty Star -->
                        <?php endfor; ?>
                    </div>
                    <a href="#" class="btn" style="border: none;margin-right: 500px" data-bs-toggle="modal"
                        data-bs-target="#rateModales"><i class="fas fa-warning" style="color: #1B3764;"></i>
                    </a>
                    <!-- Reviews Count -->
                    <div class="reviews-count" style="font-size: 12px; color: #EBBB3F;">
                        (12 مراجعات)

                    </div>

                </div>
                <?php if (isset($component)) { $__componentOriginala7fa93570f1c9523da372d93ba560738 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala7fa93570f1c9523da372d93ba560738 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.report-review-commit','data' => ['reviewid' => $item->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('report-review-commit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['reviewid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala7fa93570f1c9523da372d93ba560738)): ?>
<?php $attributes = $__attributesOriginala7fa93570f1c9523da372d93ba560738; ?>
<?php unset($__attributesOriginala7fa93570f1c9523da372d93ba560738); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7fa93570f1c9523da372d93ba560738)): ?>
<?php $component = $__componentOriginala7fa93570f1c9523da372d93ba560738; ?>
<?php unset($__componentOriginala7fa93570f1c9523da372d93ba560738); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if(isset($report)): ?>
                <div class="report-actions" style="display: flex; align-items: center; gap: 20px;margin-left: 550px">
                    <form action="<?php echo e(route('admin.destroy.review', $item->id)); ?>" method="POST"
                        style="margin-top: 5px">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" style="background: none;border: none">
                            <a href=""
                                style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 211);">
                                <img src="<?php echo e(asset('images/img/trash.png')); ?>" alt="trash"
                                    style="width: 20px; height: 20px;">
                            </a>
                        </button>
                    </form>

                    <a href="<?php echo e(route('admin.refused.report.review', $item->id)); ?>"
                        style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 161);">
                        Report: <?php echo e($item->report_one->report); ?>

                        <i class="fas fa-undo" style="width: 20px; height: 20px; margin-left: 12px;font-size: 20px"></i>
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/comment.blade.php ENDPATH**/ ?>