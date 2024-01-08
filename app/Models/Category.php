<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function CategoryType()
    {
        return $this->hasMany(Categorytype::class);
    }


    public function styles()
    {
        return $this->hasMany(Categorytype::class, 'category_id','id');
    }

    

    public function style()
    {
        return $this->hasOne(Categorytype::class, 'category_id','id');
    }

    public function getCategoryIdAttribute()
    {
        return $this->id;
    }
    
}
