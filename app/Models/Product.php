<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category(){
        return $this->hasOne(Category::class); //product a une seul category
    }
    public function users() {
        return $this->belongsToMany(User::class ,'user_products', 'product_id','user_id');

    }
}
