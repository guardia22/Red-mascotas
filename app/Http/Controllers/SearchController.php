<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($namepet){
        return User::select('id','namepet','profile_photo_url')->where('namepet','like','%'.$namepet.'%')->get();
    }
}
