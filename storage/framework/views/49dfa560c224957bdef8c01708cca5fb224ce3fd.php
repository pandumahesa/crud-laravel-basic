<?php $__env->startSection('content'); ?>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            <h1>Daftar Kategori</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Kategori</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($category->name); ?></td>
                            <td>
                                <a href="<?php echo e(route('categories.show', $category->id)); ?>" class="btn btn-primary">Lihat</a>
                                <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success">Buat Kategori Baru</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/200401004_laravel/resources/views/categories/index.blade.php ENDPATH**/ ?>