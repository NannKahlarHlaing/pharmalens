<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $maxOrder = static::max('order');
            $model->order = $maxOrder + 1;
        });
    }

    public function scopeFilter($query, $filter){
        $query->when($filter['name'] ?? false, function($query, $name){
            $query->where('name_en', 'LIKE', '%' . $name .'%');
        });
    }
}
