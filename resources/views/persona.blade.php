<html>
<head>
</head>
<body>
<ul>
@foreach ($personas as $persona )
    <li>{{$persona->nombre}}</li><span>{{$persona->correo}}</span>
@endforeach
</ul>
</body>
</html>
