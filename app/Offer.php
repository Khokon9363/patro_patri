<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function subMenuOffer()
    {
        return $this->belongsTo(SubMenu::class, 'offer_id', 'id');
    }
}
