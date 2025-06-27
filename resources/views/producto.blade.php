<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Lista de productos</h3>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Existencia</th>
            <th>precio</th>
        </tr>
    
    
        <tr>
            @foreach ($producto as $pro )
            <td></td>
            <td>{{$pro->id}}</td>
            <td>{{$pro->nombre}}</td>
            <td>{{$pro->descripcion}}</td>
            <td>{{$pro->precio}}</td>
            <td>{{$pro->existencia}}</td>
        </tr>
    @endforeach


    {{$producto -> links ()}}
    </table>
</body>
</html>
