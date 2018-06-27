<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFamiliaRequest;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familia = Familia::paginate(10);
        return view('familia.index', compact('familia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familia = new Familia;
        return view('familia.create', compact('familia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFamiliaRequest $request)
    {

      if($familia = Familia::create($request->except('_token'))){
        return redirect('familias')->with('info', 'Familia creada!');
      }else{
        return back()->with('info', 'Ocurrio un problema!');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Familia  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $familia = Familia::findOrFail($id);
        $pacientes = $familia->pacientes;

        return view('familia.show', compact('familia', 'pacientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $familia = new Familia;
        $pacientes = $familia->pacientes();

        return view('familias.edit', compact('familia', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familia $familia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familia $familia)
    {
        //
    }

    public function addPacienteToFamilia(Request $request, $pacienteid)
    {
      $familia = Familia::findOrFail($request->id);

      if($pacientes = $familia->pacientes->save($pacienteid))
      {
        return redirect()->route('familias.index');
      }else{
        echo 'No se pudo guardar';
      }

    }
}
