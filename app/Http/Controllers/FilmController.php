<?php

namespace App\Http\Controllers;

use App\Services\FilmServiceInterface;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function search(Request $request, FilmServiceInterface $filmService)
    {

        //dd($request->get('title'));
        $film = $filmService->getFilm($request->get('title'));
        return view('result', compact('film'));
    }
}
