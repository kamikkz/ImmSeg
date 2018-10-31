<?php

namespace App\Http\Controllers;

use App\VehicularControl\VehicularControl;
use Illuminate\Http\Request;

class VehicularControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicularControls=VehicularControl::all();
        return view('CRUD_ControlVehicular.index',compact('vehicularControls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD_ControlVehicular.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicularControl = new VehicularControl();
        $vehicularControl->chofer=$request->input('chofer');
        $vehicularControl->gafeteV=$request->input('gafeteV');
        $vehicularControl->tipo=$request->input('tipo');
        $vehicularControl->placa=$request->input('placa');

        $vehicularControl->nombre=$request->input('nombre');
        $vehicularControl->gafeteT=$request->input('gafeteT');

        $vehicularControl->operador=$request->input('operador');
        $vehicularControl->g_master=$request->input('g_master');
        $vehicularControl->piezas=$request->input('piezas');
        $vehicularControl->kilos=$request->input('kilos');

        $vehicularControl->hr_entrada=$request->input('hr_entrada');
        $vehicularControl->hr_salida=$request->input('hr_salida');

        $vehicularControl->revisor="Soy el revisor";
        $vehicularControl->turno="Soy el turno";
        $vehicularControl->jefe="Soy el jefe de jefes";

        $vehicularControl->save();

        return redirect()->route('vehicular_controls.index')
            ->with('info','Registro guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VehicularControl\VehicularControl  $vehicularControl
     * @return \Illuminate\Http\Response
     */
    public function show(VehicularControl $vehicularControl)
    {
        return "edito";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VehicularControl\VehicularControl  $vehicularControl
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicularControl $vehicularControl)
    {
        return "edito";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VehicularControl\VehicularControl  $vehicularControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicularControl $vehicularControl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VehicularControl\VehicularControl  $vehicularControl
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicularControl $vehicularControl)
    {
        //
    }
}
