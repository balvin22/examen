<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function inicio(){
        return view('centro.formulario');
    }


    public function store(Request $request){

        $centro = new  Centro();
        $centro->codigo = $request->codigo;
        $centro->nombre = $request->nombre;
        $centro->direccion = $request->direccion;
        $centro->telefono = $request->telefono;
        $centro->save();
        return redirect()->route('centro.index');
    }


    public function index(){
        $centro = Centro::all();
        return view('centro.index', compact('centro'));
    }


    public function show($id){
        $centro = Centro::find($id);
        return view('centro.show',compact('centro'));
     
    }


    public function update(Request $request, $id){
        $centro = Centro::find($id);
        $centro->codigo = $request->codigo ??  $centro->codigo; 
        $centro->nombre = $request->nombre ??  $centro->nombre;
        $centro->direccion = $request->direccion ??  $centro->direccion;
        $centro->telefono = $request->telefono ??  $centro->telefono;
        $centro->save();


        return redirect()->route('centro.index');
    }

    public function destroy($id){
        $centro = Centro::find($id);

        $centro->delete();
        return redirect()->route('centro.index');
    }


    public function edit($id) {
        $centro = Centro::find($id);
        return view('centro.edit',compact('centro'));

    }
}
