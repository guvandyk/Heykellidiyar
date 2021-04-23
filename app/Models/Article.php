<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table="contactarticle";

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

public function getEmail()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->email_tm ?: $this->email_ru;
                break;
            case 'ru':
                return $this->email_ru ;
                break;
                case 'en':
                return $this->email_en ?: $this->email_ru;
                break;
            default:
                return $this->email_ru;
        }
}

public function getTelefon()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->telefon_tm ?: $this->telefon_ru;
                break;
            case 'ru':
                return $this->telefon_ru ;
                break;
                 case 'en':
                return $this->telefon_en ?: $this->telefon_ru;
                break;
            default:
                return $this->telefon_ru;
        }
}
public function getTema()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->tema_tm ?: $this->tema_ru;
                break;
            case 'ru':
                return $this->tema_ru;
                break;
                case 'en':
                return $this->tema_en ?: $this->tema_ru;
                break;
            default:
                return $this->tema_ru;
        }
}
public function getHabar()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->habar_tm ?: $this->habar_ru;
                break;
            case 'ru':
                return $this->habar_ru ;
                break;
              case 'en':
                return $this->habar_en ?: $this->habar_ru;
                break;
            default:
                return $this->habar_ru;
        }
}
public function getService()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->servis_tm ?: $this->servis_ru;
                break;
            case 'ru':
                return $this->servis_ru ;
                break;
                case 'en':
                return $this->servis_en ?: $this->servis_ru;
                break;
            default:
                return $this->servis_tm;
        }
}
public function getButton()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->button_tm ?: $this->button_ru;
                break;
            case 'ru':
                return $this->button_ru ;
                break;
                case 'en':
                return $this->button_en ?: $this->servis_ru;
                break;
            default:
                return $this->button_ru;
        }
}
}
