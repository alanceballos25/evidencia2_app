

<?php $__env->startSection('title', 'create'); ?>

<?php $__env->startSection('content'); ?>
<h1>Este será el formulario CREATE</h1>

<form action="">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="description">Description</label>
    <input type="text" id="description" name="description">

    <label for="difficulty">Difficulty</label>
    <select name="difficulty" id="difficulty">
        <option value="beginner">Beginner</option>
        <option value="intermediate">Intermediate</option>
        <option value="advanced">Advanced</option>
    </select>

    <label for="instructor">Instructor</label>
    <input type="text" id="instructor" name="instructor">

    <label for="email">Email</label>
    <input type="text" id="email" name="email">

    <input type="submit" value="Add Course">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Programas_WEB\Laravel\Actividad7\resources\views/create.blade.php ENDPATH**/ ?>