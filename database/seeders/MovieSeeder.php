<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $movies = [
        [
            "title" => "Inception",
            "description" => "Un ladro, esperto nell'estrazione di segreti dai sogni delle persone, riceve l'incarico di impiantare un'idea nella mente di un CEO.",
            "director" => "Christopher Nolan",
            "release_year" => 2010,
            "genre" => "Azione, Fantascienza, Thriller",
            "rating" => 8.8,
            "duraction" => 148,
            "poster" => ""
        ],
        [
            "title" => "The Dark Knight",
            "description" => "Batman deve affrontare il Joker, un criminale psicopatico che vuole destabilizzare Gotham City.",
            "director" => "Christopher Nolan",
            "release_year" => 2008,
            "genre" => "Azione, Crimine, Drammatico",
            "rating" => 9.0,
            "duraction" => 152,
            "poster" => ""
        ],
        [
            "title" => "Forrest Gump",
            "description" => "La vita straordinaria di un uomo semplice, che ha influenzato gli eventi storici degli Stati Uniti senza mai volerlo.",
            "director" => "Robert Zemeckis",
            "release_year" => 1994,
            "genre" => "Drammatico, Commedia",
            "rating" => 8.8,
            "duraction" => 142,
            "poster" => ""
        ],
        [
            "title" => "The Matrix",
            "description" => "Un hacker scopre che la realtà in cui vive è una simulazione creata da macchine per tenere sotto controllo l'umanità.",
            "director" => "Lana Wachowski, Lilly Wachowski",
            "release_year" => 1999,
            "genre" => "Azione, Fantascienza",
            "rating" => 8.7,
            "duraction" => 136,
            "poster" => ""
        ],
        [
            "title" => "Pulp Fiction",
            "description" => "Le storie di vari personaggi si intrecciano in una serie di eventi casuali legati al crimine e alla redenzione.",
            "director" => "Quentin Tarantino",
            "release_year" => 1994,
            "genre" => "Crimine, Drammatico",
            "rating" => 8.9,
            "duraction" => 154,
            "poster" => ""
        ],
       ];

       foreach($movies as $movie){
        $newMovie = new Movie();
        $newMovie->title = $movie["title"];
        $newMovie->description = $movie["description"];
        $newMovie->director = $movie["director"];
        $newMovie->release_year = $movie["release_year"];
        $newMovie->genre = $movie["genre"];
        $newMovie->rating = $movie["rating"];
        $newMovie->duraction = $movie["duraction"];
        $newMovie->poster = $movie["poster"];
        $newMovie->Save();
       }
    }
}