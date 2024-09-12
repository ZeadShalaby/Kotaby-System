<footer class="footer mt-5">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="shape p-3 p-md-4 p-lg-5" id="shape">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center p-4">
                        <div class="d-flex align-items-center justify-content-center"
                            style="max-width: 800px; width: 100%;">
                            <h1 class="display-4 mb-0 mr-3"><?php echo app('translator')->get('kotaby.join'); ?></h1>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('kotaby.placeholder'); ?>" />
                                <div class="input-group-append">
                                    <button class="btn btn-warning"><?php echo app('translator')->get('kotaby.subscripe'); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row text-center">
            <!-- Column -->
            <div class="col-md-10 d-flex justify-content-between align-items-center" id="text-icon">
                <div class="text-items d-flex">
                    <span class="text-item"><?php echo app('translator')->get('kotaby.sections'); ?></span>
                    <span class="text-item"><?php echo app('translator')->get('kotaby.authors'); ?></span>
                    <span class="text-item"> <?php echo app('translator')->get('kotaby.review'); ?></span>
                    <span class="text-item"><?php echo app('translator')->get('kotaby.about'); ?></span>
                </div>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Horizontal Line -->
        <div class="row">
            <div class="col-12 text-center">
                <hr class="custom-line">
            </div>
        </div>


        <div class="row justify-content-center align-items-center legal">

            <div class="col-12 col-md-4 text-center legal__links">
                <span>&copy;<?php echo app('translator')->get('kotaby.reserve'); ?></span>
            </div>
            <div class="col-12 col-md-4 text-center">
                <!-- You can add content here if needed -->
            </div>

            <div class="col-12 col-md-4 text-center">
                <div class="d-flex justify-content-center">
                    <p class="mx-2">
                        <?php echo app('translator')->get('kotaby.policy'); ?>
                    </p>
                    <p class="mx-2"><?php echo app('translator')->get('kotaby.service'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/layouts/partials/footer.blade.php ENDPATH**/ ?>