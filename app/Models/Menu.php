<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function MenuName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->menu_tm ?: $this->menu_ru;
                break;
            case 'ru':
                return $this->menu_ru;
                break;
             case 'en':
                return $this->menu_en ?: $this->menu_ru;
                break;
            default:
                return $this->menu_ru;
        }
}
}
