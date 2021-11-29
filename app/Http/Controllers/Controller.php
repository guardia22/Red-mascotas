<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mascota(){
       // $request
        return Inertia::render('Mascota/Indexmascota', [
            'variable1' => 'Información',
            'user' => auth()->user()
            ]);
    }

    public function otraMascota($perfil){
     $user = User::find($perfil); 
        // $request
         return Inertia::render('Mascota/Indexmascota', [
             'variable1' => 'Información',
             'user' => $user
             ]);
     }
     
    

}


