<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Bienvenido este el contenido de Courses:  </h1>
    <!-- <?php echo e($courses); ?> -->

<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($course -> name); ?>

</br>
    <?php echo e($course -> description); ?>

</br>
    <?php echo e($course -> dificulty); ?>

</br>
    <?php echo e($course -> instructor); ?>

</br>
    <?php echo e($course -> email); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  
</body>
</html><?php /**PATH G:\Programas_WEB\Laravel\Actividad7\resources\views/index.blade.php ENDPATH**/ ?>