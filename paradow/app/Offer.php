<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //


    public function categories()
    {
            return $this->hasMany(Category::Class);
    }
}
