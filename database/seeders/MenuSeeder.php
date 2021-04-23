<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
    		'menu_tm'=>'Baş sahypa',
    		'menu_ru'=>'Главная страница ',
    		'menu_en'=>'Home'
    	]);

        DB::table('menus')->insert([
    		'menu_tm'=>'Isewurlik',
    		'menu_ru'=>'Виды деятельности ',
    		'menu_en'=>'Work'
    	]);

        DB::table('menus')->insert([
    		'menu_tm'=>'Harytlar',
    		'menu_ru'=>'Торговля',
    		'menu_en'=>'Products'
    	]);

        DB::table('menus')->insert([
    		'menu_tm'=>'Hyzmatdaşlar',
    		'menu_ru'=>'Партнеры',
    		'menu_en'=>'Partners'
    	]);

        DB::table('menus')->insert([
    		'menu_tm'=>'Habarlaşmak',
    		'menu_ru'=>'КОНТАКТ',
    		'menu_en'=>'Contact'
    	]);
        
    
    }
}
