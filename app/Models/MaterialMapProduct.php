<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialMapProduct extends Model
{
    use HasFactory;
    protected $table="materialmapproduct";
    protected $guarded = [];  

    
    public function metal()
    {
        return $this->belongsTo(Metal::class,'material_id','id');
    }

    public function metalPurity()
    {
        return $this->belongsTo(Metalpurity::class, 'material_purity_id');
    }

    public function diamondQuality()
    {
        return $this->belongsTo(Diamondquality::class, 'material_purity_id');
    }

    public function diamondShape()
    {
        return $this->belongsTo(Diamondshape::class, 'material_id');
    }

    public function colorStoneQuality()
    {
        return $this->belongsTo(Colorstonequality::class, 'material_purity_id');
    }
    public function colorStoneShape()
    {
        return $this->belongsTo(ColorStoneShape::class, 'material_id');
    }
    

}
