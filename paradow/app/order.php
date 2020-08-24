<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
class order extends Model
{
    public function user()
    {
            return $this->belongsTo(User::Class);
    }

    public function get_username()
    {
            return User::where('id',$this->user_id)->first()->name;
    }
    public function get_useremail()
    {
            return User::where('id',$this->user_id)->first()->email;
    }


}
