<?php $__env->startSection('content'); ?>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            <h1>Daftar Artikel</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($article->title); ?></td>
                            <td>
                                <a href="<?php echo e(route('articles.show', $article->id)); ?>" class="btn btn-primary">Lihat</a>
                                <a href="<?php echo e(route('articles.edit', $article->id)); ?>" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('articles.destroy', $article->id)); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-success">Buat Artikel Baru</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/200401004_laravel/resources/views/articles/index.blade.php ENDPATH**/ ?>