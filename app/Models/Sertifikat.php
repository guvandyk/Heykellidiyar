<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

      public function getName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->title_tm ?: $this->title;
                break;
            case 'ru':
                return $this->title;
                break;
            case 'en':
                return $this->title_en ?: $this->title;
                break;
            default:
                return $this->title;
        }
}
}
