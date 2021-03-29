

<?php $__env->startSection('title','about'); ?>

<?php $__env->startSection('container'); ?>
        <div class="container">
            <div class="row">
                <div class="col-10">
                     <h1>Hello, <?php echo e($nama); ?></div></h1>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/about.blade.php ENDPATH**/ ?>