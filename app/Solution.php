<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    public function subMenuTwoGallery(){
        return $this->belongsTo(SubMenuTwo::class, 'sub_menu_two_id', 'id');
    }
}
