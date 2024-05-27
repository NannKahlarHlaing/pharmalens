<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteNew extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $appends = ['name', 'description'];

    public function getNameAttribute(){
        $language = app()->getLocale(); // Get the current locale

        return $language === 'en' ? $this->title_en : $this->title;
    }

    public function getDescriptionAttribute(){
        $language = app()->getLocale(); // Get the current locale

        return $language === 'en' ? $this->body_en : $this->body;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $maxOrder = static::max('order');
            $model->order = $maxOrder + 1;
        });
    }
}
