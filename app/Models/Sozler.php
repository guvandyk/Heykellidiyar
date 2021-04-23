<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sozler extends Model
{
    use HasFactory;
     public function SozName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->name_tm ?: $this->name_ru;
                break;
            case 'ru':
                return $this->name_ru;
                break;
             case 'en':
                return $this->name_en ?: $this->name_ru;
                break;
            default:
                return $this->name_ru;
        }
}
}
