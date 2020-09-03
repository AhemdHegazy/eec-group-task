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
        for ($i=0; $i<5;$i++) {
            \App\Category::create([
                'name' => 'Lorem ipsum dolor sit amet '.$i,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus eum,
                                    hic laborum molestiae nulla quos saepe voluptatem. Consectetur dolorem et
                                    minus officia sapiente voluptatem.',
            ]);
        }
    }
}
