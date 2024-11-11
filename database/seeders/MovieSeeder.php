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
            "poster" => "https://m.media-amazon.com/images/I/91Rc8cAmnAL._AC_UF894,1000_QL80_.jpg"
        ],
        [
            "title" => "The Dark Knight",
            "description" => "Batman deve affrontare il Joker, un criminale psicopatico che vuole destabilizzare Gotham City.",
            "director" => "Christopher Nolan",
            "release_year" => 2008,
            "genre" => "Azione, Crimine, Drammatico",
            "rating" => 9.0,
            "duraction" => 152,
            "poster" => "https://m.media-amazon.com/images/I/81rGCm0PyHL._AC_UF894,1000_QL80_.jpg"
        ],
        [
            "title" => "Forrest Gump",
            "description" => "La vita straordinaria di un uomo semplice, che ha influenzato gli eventi storici degli Stati Uniti senza mai volerlo.",
            "director" => "Robert Zemeckis",
            "release_year" => 1994,
            "genre" => "Drammatico, Commedia",
            "rating" => 8.8,
            "duraction" => 142,
            "poster" => "https://m.media-amazon.com/images/I/61++qxPiVuL._AC_UF1000,1000_QL80_.jpg"
        ],
        [
            "title" => "The Matrix",
            "description" => "Un hacker scopre che la realtà in cui vive è una simulazione creata da macchine per tenere sotto controllo l'umanità.",
            "director" => "Lana Wachowski, Lilly Wachowski",
            "release_year" => 1999,
            "genre" => "Azione, Fantascienza",
            "rating" => 8.7,
            "duraction" => 136,
            "poster" => "https://m.media-amazon.com/images/I/71x7df0yZdL.jpg"
        ],
        [
            "title" => "The Godfather",
            "description" => "La saga della famiglia mafiosa dei Corleone, in particolare il passaggio di potere dal padre Don Vito al figlio Michael.",
            "director" => "Francis Ford Coppola",
            "release_year" => 1972,
            "genre" => "Crimine, Drammatico",
            "rating" => 9.2,
            "duraction" => 175,
            "poster" => "https://m.media-amazon.com/images/I/81B3U3Rv+hL._AC_UF1000,1000_QL80_.jpg"
        ],
        [
            "title" => "Schindler's List",
            "description" => "La storia vera di Oskar Schindler, un imprenditore che ha salvato più di mille ebrei durante l'Olocausto.",
            "director" => "Steven Spielberg",
            "release_year" => 1993,
            "genre" => "Drammatico, Storico",
            "rating" => 9.0,
            "duraction" => 195,
            "poster" => "https://m.media-amazon.com/images/I/817R7RXH9PL._AC_UF1000,1000_QL80_.jpg"
        ],
        [
            "title" => "Titanic",
            "description" => "Un giovane artista e una giovane aristocratica si innamorano a bordo del Titanic, ma la nave affonda, cambiando le loro vite per sempre.",
            "director" => "James Cameron",
            "release_year" => 1997,
            "genre" => "Drammatico, Romantico",
            "rating" => 7.8,
            "duraction" => 195,
            "poster" => "https://m.media-amazon.com/images/I/51nbDBJ2h3L._AC_UF1000,1000_QL80_.jpg"
        ],
        [
            "title" => "Gladiator",
            "description" => "Un generale romano tradito diventa un gladiatore e cerca vendetta contro l'imperatore che ha ucciso la sua famiglia.",
            "director" => "Ridley Scott",
            "release_year" => 2000,
            "genre" => "Azione, Avventura, Drammatico",
            "rating" => 8.5,
            "duraction" => 155,
            "poster" => "https://m.media-amazon.com/images/I/71Emol9GByL._AC_UF1000,1000_QL80_.jpg"
        ],
        [
            "title" => "Interstellar",
            "description" => "Un gruppo di astronauti viaggia attraverso un buco nero per trovare un nuovo pianeta abitabile, mentre la Terra sta morendo.",
            "director" => "Christopher Nolan",
            "release_year" => 2014,
            "genre" => "Avventura, Drammatico, Fantascienza",
            "rating" => 8.6,
            "duraction" => 169,
            "poster" => "https://m.media-amazon.com/images/I/7150n4IJgFL._AC_UF1000,1000_QL80_.jpg"
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