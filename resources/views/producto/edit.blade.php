<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Registra Producto</h2>
    <form action="{{route('producto.update',$producto->id) }}" method="put">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    {{-- <input type="hidden" name="_method" value="POST"> --}}
    @method('PUT')
    <table>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="nombre" value="{{$producto->nombre}}"></td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td><input type="text" name="descripcion"value="{{$producto->descripcion}}"></td>
        </tr>
        <tr>
            <td>existencia</td>
            <td><input type="number" name="existencia"value="{{$producto->existencia}}"></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type="number" name="precio"value="{{$producto->precio}}"></td>
        </tr>
       <tr>
        <td><input type="submit" value="Actualizar"></td>
       </tr>
    </table>
    </form>
</body>
</html>