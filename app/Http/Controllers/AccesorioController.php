<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use stdClass;

class AccesorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return Inertia::render('Accesorios/Indexaccesorios');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

        $accesorio = new stdClass();
        $accesorio->id = 16;
        $accesorio->name = 'Pelota de goma para Perro';
        $accesorio->price = 30;
        $accesorio-> imageSrc = 'https://www.labeldepot.group/wp-content/uploads/2018/07/label-depot-pechera-para-perros-sintetico-2.jpg';
  
        return Inertia::render('Accesorios/Show', ['accesorio' => $accesorio]);
    }

   
}
