<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controlar extends Model
{
    use HasFactory;
    protected $fillable = ['control','fecha','horario'];
}
