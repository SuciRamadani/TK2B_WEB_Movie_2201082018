<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuciController extends Controller
{
    private $movieData = [
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
    ];

    public function index()
    {

        $movieData = $this->movieData; // Tambahkan baris ini untuk menginisialisasi variabel $movieData
        return view('homepage', compact('movieData'));
    }

    public function show($id)
    {
        $movie = $this->findMovieById($id);

        if ($movie) {
            return view('detail', ['movie' => $movie]);
        } else {
            return redirect()->route('homepage');
        }
    }

    private function findMovieById($id)
    {
        foreach ($this->movieData as $movie) {
            if ($movie['id'] === $id) {
                return $movie;
            }
        }

        return null;
    }
}
