<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id'
    ];
    
    // The relationship
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
    public function order(){
        return $this->belongsToMany(Order::class) ;
    }

}
