<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded=[];
   
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    // public function categorytype()
    // {
    //     return $this->belongsTo(Categorytype::class,'categorytype_id','id');
    // }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function categorytype()
    {
        return $this->belongsTo(categorytype::class,'category_type_id','id');
    }
}
