<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Grabaciones {{$nombre}} del {{$anio}} </h1>
    <h2> 
        @if(isset($anio))
            Del año {{$anio}}
        @else
            de todos los tiempos
        @endif
    </h2>
    <ol>
        @for($i=0; $i < $cantidad; $i++)
            <li>Algun texto</li>
        @endfor
    </ol>
</body>
</html> 