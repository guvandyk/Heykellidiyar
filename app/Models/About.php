<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

//     public function AboutName()
//     {
//         $locale = app()->getLocale();
//         switch ($locale) {
//             case 'tm':
//                 return $this->title_tm ?: $this->title_ru;
//                 break;
//             case 'ru':
//                 return $this->title_ru;
//                 break;
//              case 'en':
//                 return $this->title_en ?: $this->title_ru;
//                 break;
//             default:
//                 return $this->title_ru;
//         }
// }

/*public function AboutDescription()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->description_tm ?: $this->description_ru ;
                break;
            case 'ru':
                return $this->description_ru   ;
                break;
             case 'en':
                return $this->description_en ?: $this->description_ru;
                break;
            default:
                return $this->description_ru;
        }
}*/

}
