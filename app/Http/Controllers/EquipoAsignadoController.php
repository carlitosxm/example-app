<?php

namespace App\Http\Controllers;

use App\Models\Equipo_asignado;
use Illuminate\Http\Request;

class EquipoAsignadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipo_asignados = Equipo_asignado::orderBy('id','desc')->paginate(5);

        return view('equipoasignado.index',compact('equipo_asignados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('equipoasignado.create');
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
        $require->validate([
            'equipo_id'=>'equipo_id',
            'personal_id'=>'personal_id',
            'empresa_id'=>'empresa_id',
            'sn'=>'sn',
            'imei'=>'imei',
            'programas'=>'programas',
            'novedades'=>'novedades',
            'fecha_entrega'=>'fecha_entrega'
        ]);

        Equipo_asignado::create($request->post());
        return to_route('equipoasignado.index')->with('success','Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo_asignado  $equipo_asignado
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo_asignado $equipo_asignado)
    {
        //
        return view('equipoasignado.show',compact('equipo_asignado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo_asignado  $equipo_asignado
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo_asignado $equipo_asignado)
    {
        //
        return view('equipoasignado.edit',compact('equipo_asignado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo_asignado  $equipo_asignado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo_asignado $equipo_asignado)
    {
        //
        $request->validate([
            'equipo_id'=>'equipo_id',
            'personal_id'=>'personal_id',
            'empresa_id'=>'empresa_id',
            'sn'=>'sn',
            'imei'=>'imei',
            'programas'=>'programas',
            'novedades'=>'novedades',
            'fecha_entrega'=>'fecha_entrega'
        ]);
        $equipo_asignado->fill($request->post())->save();
        return to_route('equipoasignado.index')->with('success','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo_asignado  $equipo_asignado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo_asignado $equipo_asignado)
    {
        //
        $equipo_asignado->delete();
        return to_route('equipoasignado.index')->with('success','Registro eliminado');
    }
}
