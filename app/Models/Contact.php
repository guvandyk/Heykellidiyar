<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

     public function getAddress()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->adres ?: $this->adres_ru;
                break;
            case 'ru':
                return $this->adres_ru;
                break;
                case 'en':
                return $this->adres_en ?: $this->adres_ru;
                break;
            default:
                return $this->adres_ru;
        }
}

 public function getStreet()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->adres_koce ?: $this->adres_koce_ru;
                break;
            case 'ru':
                return $this->adres_koce_ru ;
                break;
                case 'en':
                return $this->adres_koce_en ?: $this->adres_koce_ru;
                break;
            default:
                return $this->adres_koce_ru;
        }
}
}
