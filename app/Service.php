<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function subMenuService()
    {
        return $this->belongsTo(SubMenu::class, 'service_id', 'id');
    }
}
