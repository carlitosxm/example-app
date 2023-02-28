<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tecnicos=Tecnico::orderBy('id','desc')->paginate(5);
        return view('tecnico.index',compact('tecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tecnico.create');
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
            'nombre'=>'required'
        ]);

        Tecnico::create($request->post());
        return to_route('tecnico.index')->with('success','Registro creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function show(tecnico $tecnico)
    {
        //
        return view('tecnico.show',compact('tecnico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit(tecnico $tecnico)
    {
        //
        return view('tecnico.edit',compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tecnico $tecnico)
    {
        //
        $request->validate([
            'nombre'=>'required'
        ]);

        $tecnico->fill($request->post())->save();
        return to_route('tecnico.index')->with('success','Registro actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy(tecnico $tecnico)
    {
        //
        $tecnico->delete();
        return to_route('tecnico.index')->with('success','Registro eliminado.');
    }
}
