<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Kategori</h1>
        <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name">Nama Kategori:</label>
                <input type="text" name="name" class="form-control" value="<?php echo e($category->name); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Kategori</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/200401004_laravel/resources/views/categories/edit.blade.php ENDPATH**/ ?>