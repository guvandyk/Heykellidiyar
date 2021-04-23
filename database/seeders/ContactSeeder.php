<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
    		'phone'=>'123456',
            'email'=>'Lorem@gmail.com',
            'fax'=>' (1) 11 4752 1433',
            'adres'=>'lorem',
            'adres_ru'=>'lorem',
            'adres_en'=>'lorem',
            'adres_koce'=>'lorem',
            'adres_koce_ru'=>'lorem',
            'adres_koce_en'=>'lorem',
            
            'created_at'=>now(),
            'updated_at'=>now()
    	]);
    }
}
