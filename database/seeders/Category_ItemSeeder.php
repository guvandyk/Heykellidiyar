<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category_ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itemcate')->insert([
    		'category_id'=>rand(1,7),
            'name_tm'=>'Test',
            'name_ru'=>'Lorem',
            'name_en'=>'Loremer',
            'image'=>'images/products/2.jpg',
            'description_tm'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis ru.',
            'description_ru'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.tm',
            'description_en'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.tm',
            'created_at'=>now(),
            'updated_at'=>now()
    	]);
    }
}
