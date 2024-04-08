<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Bienvenido este el contenido de Courses:  </h1>
    <!-- {{$courses}} -->

@foreach ($courses as $course)
    {{$course -> name}}
</br>
    {{$course -> description}}
</br>
    {{$course -> dificulty}}
</br>
    {{$course -> instructor}}
</br>
    {{$course -> email}}
@endforeach


  
</body>
</html>