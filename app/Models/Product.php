<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'is_available',
    ];
    protected $casts = [
        'is_available' => 'boolean',
        'price' => 'decimal:2',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
