<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category(){
        return $this->belongTo(Category::class);
    }


    public function user(){
        return $this->belongTo(User::class);
    }


    public function property_images(){
        return $this->hasMany(PropertyImage::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function favorites(){
        return $this->hasMany(Favorite::class);
    }
}
