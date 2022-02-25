<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Owner;

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

    public function detail($id)
    {
        $owner = Owner::where('id', $id)->get();

        return view('owners.detail', compact('owner'));
    }
}
