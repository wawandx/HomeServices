<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class HomeService extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'name',
        'thumbnail',
        'about',
        'duration',
        'price',
        'is_popular',
        'category_id',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function benefits()
    {
        return $this->hasMany(ServiceBenefit::class);
    }

    public function testimonials()
    {
        return $this->hasMany(ServiceTestimonial::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
