<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sertifikats')->insert([
    		'title'=>'Lorem',
    		'title_tm'=>'Lorem',
    		'title_en'=>'Lorem',
    		'image'=>'images/certificate/Certficate.png'
    	]);
    }
}
