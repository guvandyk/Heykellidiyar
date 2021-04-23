<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('licenses')->insert([
    		'title_tm'=>'Lorem_tm',
    		'title_ru'=>'Lorem_ru',
    		'title_en'=>'Lorem_en',
    		'image'=>'images/certificate/Certficate.png'
    	]);
    }
}
