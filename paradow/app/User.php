<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','repassword','role','photo','phone','city','creditNo','favProduct','visitor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function cart()
    {
            return $this->belongsTo(cart::Class);
    }

    public function categories()
    {
            return $this->hasMany(Category::Class);
    }
    
    public function comment()
    {
            return $this->hasMany(Comment::Class);
    }
    public function order()
    {
            return $this->hasMany(Order::Class);
    }
    public function photos()
    {
            return $this->hasMany(photos::Class);
    }
    
    public function generateToken(){
    
     $this->remember_token=str_random(60);
        $this->save();
        return $this->remember_token;   
    }
    
 

        //follow
        public function followings()
        {
            return $this->belongsToMany(User::class, 'user_follows', 'user_id', 'follow_id')->withTimestamps();
        }
    
        public function followers()
        {
            return $this->belongsToMany(User::class, 'user_follows', 'follow_id', 'user_id')->withTimestamps();
        }
    
     
        public function follow($userId) 
        {
            $this->followings()->attach($userId);
            return $this;
        }
    
        public function unfollow($userId)
        {
            $this->followings()->detach($userId);
            return $this;
        }
    
       
    
    
        public function is_following($userId)
        {
            return (boolean) $this->followings()->where('follow_id', $userId)->exists();
        }
    
}
