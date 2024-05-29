<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Facades\DB;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comics')->truncate();

        //recupero l'array di comics
        $comics = include __DIR__ . '/comics.php';

        //dump($comics);

        // foreach ($comics as $comic) {

        //     dump($comic['title']);

        // }

        foreach ($comics as $comic) {

            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->artists = $comic['artists'][0];
            $new_comic->writers = $comic['writers'][0];

            $new_comic->save();

        }
    }
}
