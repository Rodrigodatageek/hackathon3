<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;

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
        //dd($animalName);
        if(isset($animalName)) {
            $animals = Animal::where('name', 'like', '%'.$animalName.'%')->orderBy('name', 'asc')->get();
            return view('animals.results',compact('animals'));
        } elseif (isset($ownerName)) {
            $owners = Owner::where('surname', 'like', '%'.$ownerName.'%')->orderBy('surname', 'asc')->get();
            return view('owners.results',compact('owners'));
        }
        

        return view('welcome');
        
        
        
    }

    public function listAnimals()
        {
            
        }
    
}
