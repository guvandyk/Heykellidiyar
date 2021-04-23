<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IslerItem extends Model
{
    use HasFactory;

    public  function getCategory(){
  
   return $this->hasOne('App\Models\Work','id','category_id');
   }

   public function getName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->name_tm ?: $this->name_ru;
                break;
            case 'ru':
                return $this->name_ru ;
                break;
                case 'en':
                return $this->name_en ?: $this->name_ru;
                break;
            default:
                return $this->name_ru;
        }
}

public function getDescription()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->description_tm ?: $this->description_ru ;
                break;
            case 'ru':
                return $this->description_ru ;
                break;
                case 'en':
                return $this->description_en ?: $this->description_ru ;
                break;
            default:
                return $this->description_ru;
        }
}
}
