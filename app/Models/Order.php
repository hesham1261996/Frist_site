<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'price',
        'address',
        'status',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function items(){
        return $this->belongsToMany(Item::class);
    }
}
