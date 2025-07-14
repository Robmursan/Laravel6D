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
    <form action="{{route('producto.store') }}" method="post">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    {{-- <input type="hidden" name="_method" value="POST"> --}}
    @method('POST')
    <table>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td><input type="text" name="descripcion"></td>
        </tr>
        <tr>
            <td>existencia</td>
            <td><input type="number" name="existencia"></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type="number" name="precio"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto"></td>
        </tr>
       <tr>
        <td><input type="submit" value="Guardar"></td>
       </tr>
    </table>
    </form>
</body>
</html>