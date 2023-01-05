<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(Request $request)
    {   
        $request->get('id');
        
        $games = 
        [
            'Dark Souls 3',
            'Elden Ring',
            'Assassins Creed Valhalla',
            'Lost Ark',
            'Star Wars: Jedi Fallen Order'
        ];

        return view('games.index')->with('games', $games);

    }

    public function create()
    {
        return view('games.create');
    }
}