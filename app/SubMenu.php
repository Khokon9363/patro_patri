<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    public function mainMenu()
    {
        return $this->belongsTo(MainMenu::class, 'main_menu_id', 'id');
    }
    public function subMenuTwo()
    {
        return $this->hasMany(SubMenuTwo::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
