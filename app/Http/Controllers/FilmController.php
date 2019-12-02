<?php

namespace App\Http\Controllers;

use App\Services\FilmServiceInterface;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function search(Request $request, FilmServiceInterface $filmService)
    {
       $film = $filmService->getFilm($request->get('title'));
    }
}
