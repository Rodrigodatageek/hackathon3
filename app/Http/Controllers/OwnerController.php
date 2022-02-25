<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OwnerController extends Controller
{

    public function redirect()
    {
    
        view('../owner');
    }

    // public function index()
    // {
    //     $results = DB::select('
    //     SELECT *
    //     FROM `movies`
    //     ORDER BY `rating` DESC
    //     LIMIT 10
    //     ');

        
        
    //     return view(
    //         'index.index', 
    //         [
    //         'top_movies' => $results
    //         ]
    //     );
    // }

    
}
