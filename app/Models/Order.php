<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function property()
    {
        return $this->belongTo(Property::class);
    }
}
