<?php

namespace App\Http\Controllers;

use App\Models\Orden_trabajo;
use Illuminate\Http\Request;

class OrdenTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orden_trabajos = Orden_trabajo::orderBy('id','desc')->paginate(5);
        return view('ordentrabajo.index',compact('orden_trabajos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ordentrabajo.create');
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
        $request->valedate([
            'tecnico_id'=>'tecnico_id',
            'tipmantenimiento_id'=>'tipmantenimiento_id',
            'equasignado_id'=>'equasignado_id',
            'fecha_ingreso'=>'fecha_ingreso',
            'fecha_salida'=>'fecha_salida',
            'anomalias'=>'anomalias',
            'trabajos'=>'trabajos',
            'estado'=>'estado'
        ]);
        Order_trabajo::create($request->post());
        return to_route('ordentrabajo.index')->with('success','Registro ingresado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orden_trabajo  $orden_trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(orden_trabajo $orden_trabajo)
    {
        //
        return view('ordentrabajo.show',compact($orden_trabajo));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orden_trabajo  $orden_trabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(orden_trabajo $orden_trabajo)
    {
        //
        return view('ordentrabajo.edit',compact($orden_trabajo));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orden_trabajo  $orden_trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orden_trabajo $orden_trabajo)
    {
        //
        $request->valedate([
            'tecnico_id'=>'tecnico_id',
            'tipmantenimiento_id'=>'tipmantenimiento_id',
            'equasignado_id'=>'equasignado_id',
            'fecha_ingreso'=>'fecha_ingreso',
            'fecha_salida'=>'fecha_salida',
            'anomalias'=>'anomalias',
            'trabajos'=>'trabajos',
            'estado'=>'estado'
        ]);
        $orden_trabajo->fill($request->post())->save();
        return to_route('ordentrabajo.index')->with('success','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orden_trabajo  $orden_trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(orden_trabajo $orden_trabajo)
    {
        //
        $orden_trabajo->delete();
        return to_route('ordentrabajo.index')->with('success','Registro eliminado');
    }
}
