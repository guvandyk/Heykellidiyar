<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contactarticle')->insert([
    		'name_tm'=>'Adyňyz',
    		'name_ru'=>'Имя',
    		'name_en'=>'Name',
    		'email_tm'=>'Email Adresiňiz',
    		'email_ru'=>'ЭЛЕКТРОННОЕ ПИСЬМО',
    		'email_en'=>'Email',
    		'telefon_tm'=>'Telefon Nomeriňiz',
    		'telefon_ru'=>'Телефон',
    		'telefon_en'=>'Phone',
    		'tema_tm'=>'Tema',
    		'tema_ru'=>'ПРЕДМЕТ',
    		'tema_en'=>'Subject',
    		'servis_tm'=>'Serwis',
    		'servis_ru'=>'СЕРВИСЫ',
    		'servis_en'=>'Service',
    		'habar_tm'=>'Habar',
    		'habar_ru'=>'СООБЩЕНИЕ',
    		'habar_en'=>'Message',
    		'button_tm'=>'Habar iberiň',
    		'button_ru'=>'Отправить сообщение',
    		'button_en'=>'Send Message'
    	]);
    }
}
