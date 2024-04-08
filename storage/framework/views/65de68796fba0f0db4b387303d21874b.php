<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario CREATE</title>
</head>
<body>
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
</body>
</html>

<?php /**PATH G:\Programas_WEB\Laravel\Actividad7\resources\views/layout/app.blade.php ENDPATH**/ ?>