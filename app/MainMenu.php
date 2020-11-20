<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    public function subMenu()
    {
        return $this->hasMany(SubMenu::class);
    }
}
