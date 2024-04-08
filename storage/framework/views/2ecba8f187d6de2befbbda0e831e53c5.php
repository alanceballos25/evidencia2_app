

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Create New Book</h1>
        <form action="<?php echo e(route('books.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author_name">Author:</label>
                <input type="text" name="author_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="published_year">Published Year:</label>
                <input type="number" name="published_year" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Programas_WEB\Laravel\Actividad9\resources\views/create_1.blade.php ENDPATH**/ ?>