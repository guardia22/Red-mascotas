<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsuarioController extends Controller
{
    
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get("search");
        $perfiles = User::where('namepet', 'like', "%$search%")
        ->orWhere('sexo', 'like', "%$search%")
        ->orWhere('name', 'like', "%$search%")
        ->orWhere('type_pet', 'like', "%$search%")
        ->get();   

        return Inertia::render('Dashboard',compact('perfiles'));

        // request()->session()->flash('message', 'Mensaje de prueba');
    }
}