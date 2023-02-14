<?php

namespace App\Http\Controllers;

use App\Models\tipomantenimiento;
use Illuminate\Http\Request;

class TipomantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipomantenimientos=Tipomantenimiento::orderBy('id','desc')->paginate(5);
        return view('tipomantenimiento.index',compact('tipomantenimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipomantenimiento.create');
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
        Tipomantenimiento::create($request->post());
        return to_route('tipomantenimiento.index')->with('success','Registro creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipomantenimiento  $tipomantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show(tipomantenimiento $tipomantenimiento)
    {
        //
        return view('tipomantenimiento.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipomantenimiento  $tipomantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(tipomantenimiento $tipomantenimiento)
    {
        //
        return view('tipomantenimiento.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipomantenimiento  $tipomantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipomantenimiento $tipomantenimiento)
    {
        //
        $request->validate([
            'nombre'=>'required'
        ]);
        $tipomantenimiento->fill($request->post())->save();
        return to_route('tipomantenimiento.index')->with('success','Registro actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipomantenimiento  $tipomantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipomantenimiento $tipomantenimiento)
    {
        //
        $tipomantenimiento->delete();
        return to_route('tipomantenimiento.index')->with('success','Registro eliminado.');
    }
}
