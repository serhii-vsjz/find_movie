<?php

namespace App\Http\Controllers;

use App\Services\FilmServiceInterface;
use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
       // dd($films);
        return view('search', compact('films'));
    }
    public function search(Request $request, FilmServiceInterface $filmService)
    {
        $film = $filmService->getFilm($request->get('title'));
        return view('result', compact('film'));
    }
}
