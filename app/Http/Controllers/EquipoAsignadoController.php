<?php

namespace App\Http\Controllers;

use App\Models\Equipo_asignado;
use App\Models\Equipo;
use App\Models\Personal;
use App\Models\Empresa;
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

        $equipo_asignados->each(function($equipo_asignados)
            {
                $equipo_asignados->equipo;
            });
        $equipo_asignados->each(function($equipo_asignados)
            {
                $equipo_asignados->personal;
            });
        $equipo_asignados->each(function($equipo_asignados)
            {
                $equipo_asignados->empresa;
            });

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
        $equipos=Equipo::all();
        $personals=Personal::all();
        $empresas=Empresa::all();
        return view('equipoasignado.create',compact('equipos','personals','empresas'));
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
            'equipo_id'=>'required',
            'personal_id'=>'required',
            'empresa_id'=>'required',
            'sn'=>'required',
            'imei'=>'required',
            'programas'=>'required',
            'novedades'=>'required',
            'fecha_entrega'=>'required'
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
    public function show($id)
    {
        //
        $equipo_asignado=Equipo_asignado::find($id);
        $equipo_asignado->each(function($equipo_asignado)
            {
                $equipo_asignado->equipo;
                $equipo_asignado->personal;
                $equipo_asignado->empresa;
            });
        return view('equipoasignado.show',compact('equipo_asignado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo_asignado  $equipo_asignado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $equipos=Equipo::all();
        $personals=Personal::all();
        $empresas=Empresa::all();
        $equipo_asignado=Equipo_asignado::find($id);
        return view('equipoasignado.edit',compact('equipo_asignado','equipos','personals','empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo_asignado  $equipo_asignado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'equipo_id'=>'required',
            'personal_id'=>'required',
            'empresa_id'=>'required',
            'sn'=>'required',
            'imei'=>'required',
            'programas'=>'required',
            'novedades'=>'required',
            'fecha_entrega'=>'required'
        ]);
        $equipo_asignado=Equipo_asignado::find($id);
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
