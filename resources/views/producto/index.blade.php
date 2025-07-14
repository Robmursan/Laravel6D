<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-800 dark:bg-green-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white dark:text-green-100">
                    <a href="{{route('producto.create')}}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4">
                        Agregar Nuevo Elemento
                    </a>
                    <h3 class="text-xl font-bold mb-4">Lista de productos</h3>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-green-700 border border-green-600">
                            <thead>
                                <tr class="bg-green-600">
                                    <th class="px-6 py-3 border-b border-green-500 text-left text-xs leading-4 font-medium text-green-100 uppercase tracking-wider">Codigo</th>
                                    <th class="px-6 py-3 border-b border-green-500 text-left text-xs leading-4 font-medium text-green-100 uppercase tracking-wider">Nombre</th>
                                    <th class="px-6 py-3 border-b border-green-500 text-left text-xs leading-4 font-medium text-green-100 uppercase tracking-wider">Descripcion</th>
                                    <th class="px-6 py-3 border-b border-green-500 text-left text-xs leading-4 font-medium text-green-100 uppercase tracking-wider">Existencia</th>
                                    <th class="px-6 py-3 border-b border-green-500 text-left text-xs leading-4 font-medium text-green-100 uppercase tracking-wider">Precio</th>
                                    <th class="px-6 py-3 border-b border-green-500 text-left text-xs leading-4 font-medium text-green-100 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($producto as $pro)
                                <tr class="hover:bg-green-600">
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-green-500 text-white">{{$pro->id}}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-green-500 text-white">{{$pro->nombre}}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-green-500 text-white">{{$pro->descripcion}}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-green-500 text-white">{{$pro->existencia}}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-green-500 text-white">{{$pro->precio}}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-green-500">
                                        <a href="{{ route('producto.edit',$pro->id)}}" class="text-green-200 hover:text-green-100 mr-3">Modificar</a>
                                        <form action="{{route('producto.destroy',$pro->id)}}" method="POST" onsubmit="return confirm('¿Esta seguro de eliminar?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-300 hover:text-red-200">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        {{$producto->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
