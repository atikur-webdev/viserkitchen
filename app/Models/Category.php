<?php

namespace App\Models;

use App\Constants\Status;
use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use GlobalStatus;

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function scopeActive($query){
        return $query->where('status', Status::CATEGORY_ACTIVE);
    }
}
