

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Books</h1>
        <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary">Add Book</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Published Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($book->title); ?></td>
                        <td><?php echo e($book->author_name); ?></td>
                        <td><?php echo e($book->isbn); ?></td>
                        <td><?php echo e($book->published_year); ?></td>
                        <td>
                            <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Programas_WEB\Laravel\Actividad9\resources\views/index_1.blade.php ENDPATH**/ ?>