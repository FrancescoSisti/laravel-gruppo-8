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