<?php

namespace App\Http\Controllers;

use App\Models\classe;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class ClasseController extends Controller
{
    public function create()
    {
        return view('classe/ajout');
    }
    public function store(Request $request)
    {
        // $classe = new classe();
        // $classe->prenom = $request->prenom;
        // $classe->nom = $request->nom;
        // $classe->matiere = $request->matiere;
        // $classe->note_1 = $request->note_1;
        // $classe->examen = $request->examen;
        // $classe->save();
        // return redirect('classe/create');
     $input = $request->all();
     classe::create($input);
     return redirect('classe/create')->with('flash_message','projet creer');
    }
    public function listeClasse(){
     $classes = classe::all();
     return view('classe/index',['classes' => $classes]);       
    }
}
