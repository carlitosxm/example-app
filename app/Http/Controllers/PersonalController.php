<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Empresa;
use App\Models\Departamento;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personals=Personal::orderBy('id','desc')->paginate(5);
        $personals->each(function ($personals){
            $personals->empresa;
            $personals->departamento;
        });
        return view('personal.index',compact('personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empresas=Empresa::all();
        $departamentos=Departamento::all();
        return view('personal.create',compact('empresas','departamentos'));
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
            'departamento_id'=>'required',
            'empresa_id'=>'required',
            'nombre'=>'required',
            'apellido'=>'required'
        ]);

        Personal::create($request->post());
        return to_route('personal.index')->with('success','Registro creado.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
        $personal->each(function($personal){
            $personal->empresa;
            $personal->departamento;
        });
        return view('personal.show',compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        //
        $empresas=Empresa::all();
        $departamentos=Departamento::all();
        return view('personal.edit',compact('personal','empresas','departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        //
        $request->validate([
            'departamento_id'=>'required',
            'empresa_id'=>'required',
            'nombre'=>'required',
            'apellido'=>'required'
        ]);

        $personal->fill($request->post())->save();

        return to_route('personal.index')->with('success','Registro actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        //
        $personal->delete();
        return to_route('personal.index')->with('success','Registro eliminado.');

    }
}
