<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('islers')->insert([
            'slug' => 'lorem',
    		'name_tm'=>'Lorem_tm',
    		'name_ru'=>'Lorem_ru',
    		'name_en'=>'Lorem_en',
    		'description_tm'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia_Turkmen',
    		'description_ru'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia_russian',
    		'description_en'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia_english',
    		'image'=>'images/works/1.jpg'
    	]);
    }
}
