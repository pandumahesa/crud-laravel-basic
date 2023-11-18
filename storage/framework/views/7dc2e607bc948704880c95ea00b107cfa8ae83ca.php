<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Detail Artikel</h1>
        <h2>Judul: <?php echo e($article->title); ?></h2>
        <p>Isi Artikel: <?php echo e($article->content); ?></p>
        <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-primary">Kembali</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/200401004_laravel/resources/views/articles/show.blade.php ENDPATH**/ ?>