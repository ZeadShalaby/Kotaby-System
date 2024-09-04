<!-- Modal Structure -->
<div class="modal fade" id="sidebarModal" tabindex="-1" role="dialog" aria-labelledby="sidebarModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-right" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title" id="sidebarModalLabel">Settings</h5>
                <button type="button" class="close custom-close-button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="<?php echo e(asset('images/img/user.png')); ?>" alt="Profile Image" class="rounded-circle mb-3 mx-auto"
                    style="height: 100px;width: 100px;">
                <h5 class="mb-3">Nada Nasr</h5>
                <ul class="list-group small align-items-start text-left">
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="<?php echo e(route('users.index')); ?>">

                            <i class="fas fa-user icon-margin"></i>
                            <span>الصفحة الشخصية</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="#">

                            <i class="fas fa-book icon-margin"></i>
                            <span>مكتبتى</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="#">

                            <i class="fas fa-star icon-margin"></i>
                            <span>مراجعاتى</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="<?php echo e(Auth::check() && Auth::user()->id ? route('users.edit', Auth::user()->id) : '#'); ?>">

                            <i class="fas fa-cog icon-margin"></i>
                            <span>تعديل الحساب</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="<?php echo e(route('users.logout')); ?>">
                            <i class="fas fa-sign-out-alt icon-margin"></i>
                            <span>تسجيل الخروج</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/setting-right.blade.php ENDPATH**/ ?>