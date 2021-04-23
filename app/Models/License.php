<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    public function getName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->title_tm ?: $this->title_ru;
                break;
            case 'ru':
                return $this->title_ru;
                break;
            case 'en':
               return $this->title_en ?: $this->title_ru;
               break;
            default:
                return $this->title_ru;
        }
}
}
