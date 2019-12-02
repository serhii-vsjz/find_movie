<?php


namespace App\Services;

use App\Film;
use GuzzleHttp\Client;
use Illuminate\Http\Response;


class FilmService implements FilmServiceInterface
{
    /** @var Client $httpClient */
    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'http://www.omdbapi.com'
        ]);
    }

    /**
     * Get one film
     * @param string $title
     * @return Film
     */
    public function getFilm(string $title): Film
    {
        $film = Film::where('title', 'like', '%' . $title . '%')->first();
        if ($film)
        {
            return $film;
        }
        $apiFilm = $this->getApiFilm($title);
        dd($apiFilm);
    }

    /**
     * @param string $title
     * @return array
     * @throws \Exception
     */

    private function getApiFilm(string $title): array
    {
        $request = $this->httpClient->get(
            '',
            [
                'query' => [
                    'apikey' =>  config('app.omdb_api_key'),
                    't' => $title
                ]
            ]
        );
        if (!$request->getStatusCode() ==  Response::HTTP_OK) {
            throw new \Exception('Film not found');
        }
        $response = $request->getBody()->getContents();
        return json_decode($response, true);
    }
}

