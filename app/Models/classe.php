<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    use HasFactory;
    public $timestamps = false; 

    protected $filable = [
         "prenom",
         "nom",
         "matiere",
         "note_1",
         "examen",
    ];
}
