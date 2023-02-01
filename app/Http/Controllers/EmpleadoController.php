<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Chirp;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = Empleados::orderBy('id','desc')->paginate(5);

        $empleados->each(function($empleados)
         {
            $empleados->chirp;
         });
        return view('empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $chirps = Chirp::all();
        return view('empleados.create',compact('chirps'));
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
            'chirp_id'=>'required',
            'name'=>'required',
            'apellido'=>'required',
            'fecha'=>'required',
        ]);


        Empleados::create($request->post());

        return to_route('empleados.index')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        $chirps->Chirp::all();
        return view('empleados.show',compact('empleados,chirps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleados $empleados)
    {
        $chirps->Chirp::all();
        return view('empleados.edit',compact('empleados,chirps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleados)
    {
        //
        $request->validate([
            'chirp_id'=>'required',
            'name'=>'required',
            'apellido'=>'required',
            'fecha'=>'required',
        ]);

        $empleado->fill($request->post())->save();

        Empleados::create($request->post());
        $chirps->Chirp::all();

        return to_route('empleados.index',compact('chirps'))->with('success','Company has been created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $empleados)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success','Company has been deleted successfully');
    }
}
