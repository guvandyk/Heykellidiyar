<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('isler_items')->insert([
          'category_id'=>1,
            'name_tm'=>'Test_tm',
            'name_ru'=>'test_ru',
            'name_en'=>'test_en',
            'image'=>'images/products/2.jpg',
            'description_tm'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis ru.',
            'description_ru'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.tm',
            'description_en'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.tm',
            'created_at'=>now(),
            'updated_at'=>now()
    	]);
    }
}
