<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
class cart extends Model
{
    //

    public function user()
    {
            return $this->hasOne(User::Class);
    }
    public function categories()
    {
            return $this->hasMany(Category::Class);
    }

    public function get_username()
    {
            return User::where('id',$this->user_id)->first()->name;
    }
    public function get_useremail()
    {
            return User::where('id',$this->user_id)->first()->email;
    }

    public function get_catName()
    {
            return Category::where('id',$this->cat_id)->first()->categoryName;
    }
    public function get_catPrice()
    {
            return Category::where('id',$this->cat_id)->first()->price;
    }
    public function get_catimg()
    {
            return Category::where('id',$this->cat_id)->first()->image;
    }
}
