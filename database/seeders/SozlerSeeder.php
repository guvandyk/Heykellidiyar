<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SozlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('sozlers')->insert([
    		'name_tm'=>'Sertifikatlarymyz',
    		'name_ru'=>'Сертификаты ',
    		'name_en'=>'Sertificates'
    	]);

        DB::table('sozlers')->insert([
    		'name_tm'=>'Ygtyýarnamalar',
    		'name_ru'=>'лицензии ',
    		'name_en'=>'Licenses'
    	]);

        DB::table('sozlers')->insert([
    		'name_tm'=>'Biziň Hyzmatdaşlar',
    		'name_ru'=>'Партнеры',
    		'name_en'=>'Partners'
    	]);

        

        
        
    }
}
