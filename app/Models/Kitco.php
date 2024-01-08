<?php

namespace App\Models;
use App\Models\Metal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitco extends Model
{
    use HasFactory;
     protected $guarded=[];

      public function metaltype()
    {
        return $this->belongsTo(Metal::class,'metal_type');

    }
}
