<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *products__categories
     * @return void
     */
    public function run()
    {
    	 DB::table('onumler')->insert([
            'slug'=>'slug',
    		'name_tm'=>'Himiya Harytlar',
            'name_ru'=>'Chemical Products',
            'name_en'=>'Chemical Products',
         'description_tm'=>'Lorem ipsum dolor sit amet”, “Eligendi rem”, “El4endi rem”, “fa4cilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia”.',
         'description_ru'=>'Lorem ipsum dolor sit amet,consectetur adipisicing elit.Eligendi rem, fa4cilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.',
         'description_en'=>'Lorem ipsum dolor sit amet,consectetur adipisicing elit.Eligendi rem, fa4cilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.',
         'image'=>'images/products/1.jpg'
    	]);
        
    }
}
