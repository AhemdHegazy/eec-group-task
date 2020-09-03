<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<25;$i++){
            \App\Career::create([
               'name'               => 'Lorem ipsum dolor sit amet',
               'description'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus eum,
                                    hic laborum molestiae nulla quos saepe voluptatem. Consectetur dolorem et
                                    minus officia sapiente voluptatem.',
                'category_id'       => rand(1,5),
                'experience_id'     => rand(1,5),
                'location_id'       => rand(1,5),
            ]);
        }
    }
}
