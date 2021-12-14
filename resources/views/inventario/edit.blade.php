@extends('layouts.app')
@section('titulo', 'inicio')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <h1>🧍Editar proveedor🧍 </h1>
    <br>
    <form action="{{route('inventario.update', $inventarios)}}" method="post">
      @csrf
        @method('put')
        <label for="nombre_proveedor">nombre_proveedor:</label>
        <input type="text" name="nombre_proveedor" class="form-control" value="{{$inventarios->nombre_proveedor}}">
        <br>
        <label for="materia_prima">materia_prima:</label>
        <input type="text" name="materia_prima" class="form-control" value="{{$inventarios->materia_prima}}">
       
        <br>
        <label for="fecha">fecha:</label>
        <input type="date" name="fecha" class="form-control" value="{{$inventarios->fecha}}">
        <label for="telefono">telefono:</label>
            <input type="number" name="telefono" class="form-control" value="{{$inventarios->telefono}}">
        <br>
        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i>  Actualizar formulario</button>
        <a href="{{route('inventario')}}" class="btn btn-danger"><i class="fas fa-window-close"></i>  cancelar</a>
    </form>

    </div>
  </div>
</div>



@endsection

