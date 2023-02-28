<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Categoria;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipos = Equipo::orderBy('id','desc')->paginate(5);
        $equipos->each(function($equipos){
            $equipos->categoria;
        });
        return view('equipo.index',compact('equipos'));
        //dd($equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias=Categoria::all();
        return view('equipo.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'categoria_id'=>'required',
            'modelo'=>'required',
            'description'=>'required',
            'fecha_adquisicion'=>'required'
        ]);
        Equipo::create($request->post());
        return to_route('equipo.index')->with('success','Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        //
        $equipo->each(function($equipo){
            $equipo->categoria;
        });
        return view('equipo.show',compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        //
        $categorias=Categoria::all();
        return view('equipo.edit',compact('equipo','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
        $request->validate([
            'categoria_id'=>'required',
            'modelo'=>'required',
            'description'=>'required',
            'fecha_adquisicion'=>'required'
        ]);
        $equipo->fill($request->post())->save();
        return to_route('equipo.index')->with('success','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
        $equipo->delete();
        return to_route('equipo.index')->with('success','Registro eliminado');
    }
}
