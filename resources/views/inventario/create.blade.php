@extends('layouts.app')
@section('titulo', 'create')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>🚙 Nuevo Proveedor🚙 </h1>
<br>
    <form action="{{route('inventario.store')}}" method="post">
        @csrf
        <label for="nombre_proveedor">nombre_proveedor:</label>
        <input type="text" name="nombre_proveedor" class="form-control" required>
        <br>
        <label for="materia_prima">materia_prima:</label>
        <input type="text" name="materia_prima" class="form-control" required>
        <br>
        
        <label for="fecha">fecha:</label>
        <input type="date" name="fecha" class="form-control" required>
        <br>
        <label for="telefono">telefono:</label>
        <input type="text" name="telefono" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i>  Enviar formulario</button>
        <a href="{{route('inventario')}}" class="btn btn-danger"><i class="fas fa-window-close"></i>  cancelar</a>
    </form>

        </div>
    </div>
</div>
   

@endsection