<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public function redirect()
    {
        return view('animals.search');
    }

    public function search(Request $request)
    {
        $animalName = $request->input('pet');
        $ownerName = $request->input('owner');

        if(isset ($animalName)) {
            $animals = Animal::where('name', 'like', '%'.$animalName.'%')->orderBy('name', 'asc')->get();
            return view('animas.search',compact('animals'));
        } elseif (issset($ownerName)) {
            $owners = Owner::where('surname', 'like', '%'.$ownerName.'%')->orderBy('name', 'asc')->get();
            return view('owners.search',compact('owners'));
        }
        

        return view('welcome');
        
        
        
    }

    public function listAnimals()
        {
            
        }
    
}
