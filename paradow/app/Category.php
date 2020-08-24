<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Category extends Model
{
    //
    public function user()
    {
            return $this->belongsTo(User::Class);
    }
    public function get_username()
    {
            return User::where('id',$this->user_id)->first()->name;
    }
    public function get_userimg()
    {
            return User::where('id',$this->user_id)->first()->photo;
    }
    public function offer()
    {
            return $this->belongsTo(Offer::Class);
    }
    public function cart()
    {
            return $this->belongsTo(cart::Class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
