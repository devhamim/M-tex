<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    function rel_to_subcat(){
        return $this->hasMany(subcategory::class, 'category_id');
    }
}
