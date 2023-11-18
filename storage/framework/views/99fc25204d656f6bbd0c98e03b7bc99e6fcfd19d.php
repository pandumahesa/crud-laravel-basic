<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Detail Kategori</h1>
        <h2>Nama Kategori: <?php echo e($category->name); ?></h2>
        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-primary">Kembali</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/200401004_laravel/resources/views/categories/show.blade.php ENDPATH**/ ?>