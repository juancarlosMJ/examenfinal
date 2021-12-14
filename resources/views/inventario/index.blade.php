@extends('layouts.app')
@section('titulo', 'inicio')
@section('content')
<div class="container">
    <h1 class="text-center">📖Bienvenidos a la pagina de inventarios de Panaderia📖</h1>
    <li class="list-group-item">
        <br>

        <a  href="{{route('inventario.create', $inventarios)}}"><button class="btn btn-primary">🖋️Gregar Provedor<i class="fas fa-user-plus"></i></button></a>

                <table class="table table-dark table-borderless">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre_proveedor🚙</th>
                    <th scope="col">materia_prima</th>
                    <th scope="col">fecha</th>
                    <th scope="col">telefono</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Actualizar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventarios as $inventario)
                <tr>
                    <th>{{ $inventario->id }}</th>
                                    <th>{{ $inventario->nombre_proveedor }}</th>
                                    <th>{{ $inventario->materia_prima }}</th>
                                    <th>{{ $inventario->fecha}}</th>
                                    <th>{{ $inventario->telefono }}</th>
                                </th>

                                <form action="{{route('inventario.destroy', $inventario)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <th><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></th>
                                </form>
                                <th> <a  href="{{route('inventario.edit',$inventario->id)}}" class="btn btn-warning" role="button"><i class="fas fa-edit"></i></a> </th>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection

