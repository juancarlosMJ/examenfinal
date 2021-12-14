<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = inventario ::orderBy('id', 'desc')->paginate(10);
        return view ('inventario.index',compact('inventarios'));
    }

    public function destroy(Inventario $inventarios) {
        $inventarios->delete();
        return redirect()->route('inventario');
    }
    public function create(){
        return view ('inventario.create');
    }

    public function store(Request $request){
        $inventarios = new Inventario();

        $inventarios->nombre_proveedor = $request->nombre_proveedor;
        $inventarios->materia_prima  = $request->materia_prima ;
        $inventarios->fecha  = $request->fecha ;
        $inventarios->telefono  = $request->telefono ;
       

        $inventarios->save();
        return redirect()->route('inventario');
    }

    public function edit(Inventario $inventarios){
        return view('inventario.edit', compact('inventarios'));

    }
    public function update(Request $request, Inventario $inventarios){
        $inventarios->nombre_proveedor = $request->nombre_proveedor;
        $inventarios->materia_prima = $request->materia_prima;
        $inventarios->fecha = $request->fecha;
        $inventarios->telefono = $request->telefono;
        

        $inventarios->save();
        return redirect()->route('inventario');
    }


}
