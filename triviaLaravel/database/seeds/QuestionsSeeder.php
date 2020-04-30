<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                "question" => "¿Quien convirtió el séptimo gol en la histórica goleada
                de Estudiantes 7-0 Gimnasia?",

                "option_1" => "Pablo 'El Payaso' Luguercio",

                "option_2" => "José Luis 'Caldera' Calderón",

                "option_3" => "Juan Sebastián 'La Brujita', Verón",

                "option_4" => "Mariano 'El Tanque' Pavone",

                "image" => "7a0.jpg",

                "category_id" => 1
            ],
           
        ]);
    }
}
