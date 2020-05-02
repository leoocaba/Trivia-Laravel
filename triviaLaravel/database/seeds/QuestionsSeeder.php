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

                "option_3" => "Juan Sebastián 'La Brujita' Verón",

                "option_4" => "Mariano 'El Tanque' Pavone",

                "image" => "7a0.jpg",

                "category_id" => 1
            ],
            [
                "question" => "¿En qué mes del año el Sol está más cerca de la Tierra en el hemisferio sur?",

                "option_1" => "Diciembre",

                "option_2" => "Abril",

                "option_3" => "Agosto",

                "option_4" => "Septiembre",

                "image" => "elSol.jpg",

                "category_id" => 2
            ],
            [
                "question" => "¿En qué año finalizó la Segunda Guerra Mundial?",

                "option_1" => "1944",

                "option_2" => "1946",

                "option_3" => "1942",

                "option_4" => "1940",

                "image" => "segundaGuerraMundial.jpg",

                "category_id" => 3
            ],
            [
                "question" => "¿Qué conocido actor protagonizó 'La máscara del Zorro' en 1998?",

                "option_1" => "Antonio Banderas",

                "option_2" => "Leonardo Di Caprio",

                "option_3" => "Brad Pitt",

                "option_4" => "Ricardo Darín",

                "image" => "elZorro.jpg",

                "category_id" => 4
            ],
            [
                "question" => "¿Cuánto mide La Torre Eiffel de París?",

                "option_1" => "333 metros",

                "option_2" => "250 metros",

                "option_3" => "100 metros",

                "option_4" => "380 metros",

                "image" => "torreEiffel.jpg",

                "category_id" => 5
            ],
            [
                "question" => "¿Quién creó la popular red social 'Facebook'?",

                "option_1" => "Mark Zuckerberg",

                "option_2" => "Larry Page",

                "option_3" => "Steve Jobs",

                "option_4" => "Bill Gates",

                "image" => "facebook.jpg",

                "category_id" => 6
            ],
            [
                "question" => "¿Quién es el escritor de 'Crónica de una muerte anunciada'?",

                "option_1" => "Gabriel García Márquez",

                "option_2" => "Pablo de Santis",

                "option_3" => "Pablo Neruda",

                "option_4" => "Eduardo Galeano",

                "image" => "libros.jpg",

                "category_id" => 7
            ]
           
        ]);
    }
}
