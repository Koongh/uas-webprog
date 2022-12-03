<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function motorcycles(){
        return $this->belongsToMany(Motorcycle::class);
    }

    public function soldBy(){
        return $this->belongsToMany(User::class);
    }
}
