<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
                'id' => 1,
                'nom' => 'Alimentació',  
            ],
            [
                'id' => 2,
                'nom' => 'Textil', 
            ],
            [
                'id' => 3,
                'nom' => 'Begudes',  
            ],
            [
                'id' => 4,
                'nom' => 'Artesania',  
            ],
            [
                'id' => 5,
                'nom' => 'Infantil',  
            ],
            [
                'id' => 6,
                'nom' => 'Decoració',  
            ],
            [
                'id' => 7,
                'nom' => 'Serveis',  
            ]
            
        ]);
    }
}
