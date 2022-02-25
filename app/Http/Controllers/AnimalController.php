<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function search()
    {
        
        $results = $_GET ? DB::select("
        SELECT *
        FROM `movies`
        WHERE `name` LIKE ?
        ", [
            "%{$_GET['search']}%"
        ]) : [];
        //dump($results);
        return view('movies.search',
        [
            'movie_like' => $results
        ]);
    }
}
