<?php


namespace App\Services;

use App\Film;

interface FilmServiceInterface
{
    /**
     * Get one film
     *
     * @param string $title
     * @return Film
     */
    public function getFilm(string $title): Film;
}

