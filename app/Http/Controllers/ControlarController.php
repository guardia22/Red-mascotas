<?php

namespace App\Http\Controllers;

use App\Models\Controlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;


class ControlarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $control = Controlar::all();
        return Inertia::render('MuestraControl', ['control'=>$control]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('FormControlCrear');
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
            'control' => 'required',
            'fecha' => 'required',
            'Horario' => 'required',
        ]);

        Controlar::create($request->all());
        return Redirect::route('control.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Controlar  $controlar
     * @return \Illuminate\Http\Response
     */
    public function show(Controlar $controlar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Controlar  $controlar
     * @return \Illuminate\Http\Response
     */
    public function edit(Controlar $controlar)
    {
        return Inertia::render('FormControlEdit', ['controlar'=>$controlar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Controlar  $controlar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Controlar $controlar)
    {
        $controlar->update($request->all());
        return Redirect::route('control.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Controlar  $controlar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Controlar $controlar)
    {
        $controlar->delete();
        return Redirect::route('control.index');
    }
}
