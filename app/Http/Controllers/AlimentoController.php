<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $alimentos = Alimento::where('user_id', '=', $user_id)->get();
           return Inertia::render('Mostrar', ['alimentos'=> $alimentos]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('FormCrear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'unidad' => 'required',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        Alimento::create($data);
        return Redirect::route('alimentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show(Alimento $alimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Alimento $alimento)
    {
        return Inertia::render('FormEditar', ['alimento' => $alimento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alimento $alimento)
    {
        $alimento->update($request->all());
        return Redirect::route('alimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alimento $alimento)
    {
        $alimento->delete();
        return Redirect::route('alimentos.index');
    }
}
