<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuidado extends Model
{
    use HasFactory;
    protected $filiable = ['descripcion', 'fecha'];
}
