<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenuTwo extends Model
{
    public function subMenu()
    {
        return $this->belongsTo(SubMenu::class,'sub_menu_id','id');
    }
    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }
}
