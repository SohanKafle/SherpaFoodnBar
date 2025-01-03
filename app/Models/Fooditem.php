<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fooditem extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

}
