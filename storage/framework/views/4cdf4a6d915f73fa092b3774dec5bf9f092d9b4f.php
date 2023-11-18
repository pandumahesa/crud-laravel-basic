<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Artikel</h1>
        <form action="<?php echo e(route('articles.update', $article->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" class="form-control" value="<?php echo e($article->title); ?>" required>
            </div>
            <div class="form-group">
                <label for="content">Isi Artikel:</label>
                <textarea name="content" class="form-control" rows="5" required><?php echo e($article->content); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Artikel</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/200401004_laravel/resources/views/articles/edit.blade.php ENDPATH**/ ?>