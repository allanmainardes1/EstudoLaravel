<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(Request $request)
    {
        $games = 
        [
            'Dark Souls 3',
            'Elden Ring',
            'Assassins Creed Valhalla',
            'Lost Ark',
            'Star Wars: Jedi Fallen Order'
        ];

        $html = '<ul>';
        foreach ($games as $game)
        {
            $html .= '<li>'.$game.'</li>';
        }
        $html .= '</ul>';
        
        return $html;
        
    }
}