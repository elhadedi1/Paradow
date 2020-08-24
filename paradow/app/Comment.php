<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function get_userphoto()
    {
            return User::where('id',$this->user_id)->first()->photo;
    }
}
