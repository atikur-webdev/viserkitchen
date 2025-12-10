<?php

namespace App\Models;

use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use GlobalStatus;
    
    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
