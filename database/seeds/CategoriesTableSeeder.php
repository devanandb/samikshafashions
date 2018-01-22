<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'Oxidised Jewelry',
                'slug' => 'oxidised-jewelry',
                'code' => 'OXJ',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, sequi.',
                'image' => 'oxidized_j.jpg',
                'order' => 1,
                'published' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]

        ]);
    }
}
