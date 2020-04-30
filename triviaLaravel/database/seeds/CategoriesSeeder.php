<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=> 'Deportes'
            ],
        	[
                'name'=> 'Ciencia'
            ],
        	[
                'name'=> 'Historia'
            ],
            [
                'name'=> 'Entretenimiento'
            ],
            [
                'name'=> 'Arte'
            ],
        	[
                'name'=> 'Tecnología'
            ],
        	[
                'name'=> 'Cultura'
            ]
        ]);
    }
}
