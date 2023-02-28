<?php

namespace App\Http\Controllers;

use App\Models\Orden_trabajo;
use Illuminate\Http\Request;
use App\Models\Tecnico;
use App\Models\Tipomantenimiento;
use App\Models\Equipo_asignado;

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
        $orden_trabajos->each(function ($orden_trabajos){
            $orden_trabajos->tecnicos;
            $orden_trabajos->tipomantenimiento;
            $orden_trabajos->equipo_asignado;
        });
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
        $tecnicos=Tecnico::all();
        $tipomantenimientos=Tipomantenimiento::all();
        $equipo_asignados=Equipo_asignado::all();
        return view('ordentrabajo.create',compact('tecnicos','tipomantenimientos','equipo_asignados'));
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
            'tecnico_id'=>'required',
            'tipmantenimiento_id'=>'required',
            'equasignado_id'=>'required',
            'fecha_ingreso'=>'required',
            'fecha_salida'=>'required',
            'anomalias'=>'required',
            'trabajos'=>'required',
            'estado'=>'required'
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
        $orden_trabajos->each(function ($orden_trabajos){
            $orden_trabajos->tecnicos;
            $orden_trabajos->tipomantenimiento;
            $orden_trabajos->equipo_asignado;
        });
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
        $tecnicos=Tecnico::all();
        $tipomantenimientos::all();
        $equipo_asignados=Equipo_asignado::all();
        return view('ordentrabajo.edit',compact('orden_trabajo'));
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
            'tecnico_id'=>'required',
            'tipmantenimiento_id'=>'required',
            'equasignado_id'=>'required',
            'fecha_ingreso'=>'required',
            'fecha_salida'=>'required',
            'anomalias'=>'required',
            'trabajos'=>'required',
            'estado'=>'required'
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
