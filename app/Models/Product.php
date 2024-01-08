<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    
    public function categorytype()
    {
        return $this->belongsTo(categorytype::class,'category_type_id','id');
    }
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','category_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_products');
    }

    public function metals()
    {
        return $this->belongsToMany(Metal::class, 'metal_products');
    }

    public function category1()
    {
        return $this->belongsTo(Category::class, 'category_products');
    }

    public function subCategory()
    {
        return $this->belongsToMany(Subcategory::class, 'category_products','product_id','subcategory_id');
    }

    public function centerDiamond()
    {
        return $this->belongsTo(Diamondquality::class, 'center_diamond_quality_id');
    }

    public function centerShape()
    {
        return $this->belongsTo(Diamondshape::class, 'center_diamond_shape_id');
    }
    public function sideDiamond()
    {
        return $this->belongsTo(Diamondquality::class, 'side_diamond_quality_id');
    }

    public function sideShape()
    {
        return $this->belongsTo(Diamondshape::class, 'side_diamond_shape_id');
    }

    public function colorStoneQuality()
    {
        return $this->belongsTo(Colorstonequality::class, 'color_stone_quality_id');
    }
    public function colorStoneShape()
    {
        return $this->belongsTo(ColorStoneShape::class, 'color_stone_shape_id');
    }
    public function metalType()
    {
        return $this->belongsTo(Metal::class, 'material_map_products', 'material_id', 'id')->where('material_type_id', 1);
    }
    public function metalPurity()
    {
        return $this->belongsTo(Metalpurity::class, 'material_map_products', 'material_id', 'id')->where('material_type_id', 1);
    }

    public function ringSize()
    {
        return $this->belongsTo(Ringsize::class, 'ring_size_id');
    }

    public function orderRing()
    {
        return $this->hasOne(Cart::class);
    }

    public function kitco()
    {
        return $this->hasOne(Kitco::class, 'metal_type', 'metal_type_id');
    }

    public function materials()
    {
        return $this->hasMany(MaterialMapProduct::class, 'product_id');
    }
}
