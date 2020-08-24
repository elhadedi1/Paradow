<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class user_follow extends Model
{
    public function get_username()
    {
            return User::where('id',$this->user_id)->first()->name;
    }
    public function get_userimg()
    {
            return User::where('id',$this->user_id)->first()->photo;
    }
}
